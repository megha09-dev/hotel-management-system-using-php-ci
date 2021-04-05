<?php
	class home extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->helper("url");
			$this->load->library("session");
			$this->load->model("home_m");
		}

		function index()
		{
			$result["data"]=$this->home_m->getdata("tblroom");
			$this->load->view("Home",$result);
		}

		function loginpage()
		{
			$this->load->view("login");
		}

		function login()
		{
			if(isset($_POST["submit"]))
			{
						
				$where=array(
				'Email'=>$this->input->post("uname"),
				'Password'=>$this->input->post("passwd")
				);
				$data=$this->home_m->getonedata("tbluser",$where);
				print_r($data);
				if(count($data)>0)
				{
					//echo "ok";
					$sessiondata=array(
					'UserId'=>$data["UserId"],
					'UserName'=>$data["UserName"],
					'Address'=>$data["Address"],
					'Contact'=>$data["Contact"],
					'Email'=>$data["Email"],
					'Password'=>$data["Password"]
					);
					$this->session->set_userdata($sessiondata);
					/*print_r($sessiondata);
					echo $this->session->userdata("UId");
					echo "<br>";
					echo $this->session->userdata("UserName");			*/
					redirect(base_url()."home");
				}
			}
			
		}

		function allroom()
		{
			$result["data"]=$this->home_m->getdata("tblroom");
			$this->load->view("room-classic-3-columns",$result);
		}

		function checkavl()
		{
			$result["data"]=$this->home_m->getdata("tblroom");
			$this->load->view("booking",$result);
		}

		function aboutus()
		{
			$this->load->view("about-us");
		}

		function contactus()
		{
			$this->load->view("contact-us");
		}

		function profile()
		{
			$this->load->view("profile");
		}

		function booking()
		{
			$where=array('RoomId'=>$_POST["gdlr-room-type"]);
			$result=$this->home_m->getonedata("tblroom",$where);
			$amt=$_POST["gdlr-night"]*$_POST["gdlr-room-number"]*$result["Price"];
			$data=array(
				'CheckIn'=>$_POST["checkin"],
				'CheckOut'=>$_POST["checkout"],
				'Night'=>$_POST["gdlr-night"],
				'RoomId'=>$_POST["gdlr-room-type"],
				'NoOfRooms'=>$_POST["gdlr-room-number"],
				'Adult'=>$_POST["gdlr-adult-number"],
				'Children'=>$_POST["gdlr-children-number"],
				'Amount'=>$amt,
				'UserId'=>$this->session->userdata("UserId")
			);
			$this->home_m->insert("tblbooking",$data);
			$this->load->view("success");
		}

		function registerpage()
		{
			$this->load->view("registration");
		}

		function registration()
		{
			$data=array(
					'UserName'=>$_POST["cname"],
					'Address'=>$_POST["address"],
					'Contact'=>$_POST["nub"],
					'Email'=>$_POST["email"],
					'Password'=>$_POST["pass"]
			);
			$this->home_m->insert("tbluser",$data);
			$this->load->view("login");
			
		}

		function updateprofile()
		{
			$where=array('UserId'=>$this->session->userdata("UserId"));
			$data=array(
					'UserName'=>$_POST["uname"],
					'Address'=>$_POST["address"],
					'Contact'=>$_POST["nub"],
					'Password'=>$_POST["pass"]
			);
			$this->home_m->update("tbluser",$data,$where);
			$result=$this->home_m->getonedata("tbluser",$where);
			$sessiondata=array(
					'UserName'=>$result["UserName"],
					'Address'=>$result["Address"],
					'Contact'=>$result["Contact"],
					'Password'=>$result["Password"]
					);
					$this->session->set_userdata($sessiondata);
			$this->load->view("profile");

		}

		function logout()
		{
			session_destroy();
			redirect(base_url()."home");
		}

	}
?>
