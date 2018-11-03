<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
	public function run()
	{
		$admin = DB::table('users')->insert([
			'username'   => 'username',                 //default username
			'email'      => 'username@domain.com',     //default email
			'password'   => Hash::make('123456'),      //default password
			'name' => 'Admin Full Name',
			'phone'  => '+880-1722-000000',
			'image'  => '',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);

		$website = DB::table('websites')->insert([
			'name'   => 'School Name',                 //default username
			'email'      => 'school@domain.com', 
			'phone'  => '+880-1722-000000',
			'address'  => 'School Address',
			'map'  => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14618.001943658155!2d90.35632067321413!3d23.658021084138017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7aac0bdc26c9a261!2z4Kau4Ka_4Kao4KeN4Kao4KakIOCmquCnjeCmsuCmvuCmnOCmvg!5e0!3m2!1sen!2sbd!4v1541142276986',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);

		$about = DB::table('abouts')->insert([
			[
				'type'   => 'About',          
				'description'  => 'I am Full Stake Web Developer. I create websites and web applications using such technologies as HTMLS/CSS, JavaScript, PHP, Bootstrap, jQuery, MySql and such content management systems as Wordpress, Magento, etc. 
					Besides that, I have experience in graphic designing such as logo designing, vector portrait,cover designing etc . I have developed a wide range of websites for my university, startup companies and small businesses. 
					My core competency lies in complete end-end management of a new website development project, and I am seeking opportunities to build websites from the ground up for you or your business. I believe that my strong knowledge base and great experience are the keys to customer satisfaction. 
					My essential characteristics is professionalism, originality and innovation. 
					I place great importance on small details and try to bring something new to every project',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			
			],

			[
				'type'   => 'History',          
				'description'  => 'I am Full Stake Web Developer. I create websites and web applications using such technologies as HTMLS/CSS, JavaScript, PHP, Bootstrap, jQuery, MySql and such content management systems as Wordpress, Magento, etc. 
					Besides that, I have experience in graphic designing such as logo designing, vector portrait,cover designing etc . I have developed a wide range of websites for my university, startup companies and small businesses. 
					My core competency lies in complete end-end management of a new website development project, and I am seeking opportunities to build websites from the ground up for you or your business. I believe that my strong knowledge base and great experience are the keys to customer satisfaction. 
					My essential characteristics is professionalism, originality and innovation. 
					I place great importance on small details and try to bring something new to every project',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			
			],

			[
				'type'   => 'Mission',          
				'description'  => 'I am Full Stake Web Developer. I create websites and web applications using such technologies as HTMLS/CSS, JavaScript, PHP, Bootstrap, jQuery, MySql and such content management systems as Wordpress, Magento, etc. 
					Besides that, I have experience in graphic designing such as logo designing, vector portrait,cover designing etc . I have developed a wide range of websites for my university, startup companies and small businesses. 
					My core competency lies in complete end-end management of a new website development project, and I am seeking opportunities to build websites from the ground up for you or your business. I believe that my strong knowledge base and great experience are the keys to customer satisfaction. 
					My essential characteristics is professionalism, originality and innovation. 
					I place great importance on small details and try to bring something new to every project',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			
			],
		]);

		$message = DB::table('messages')->insert([

			[
				'name'   => 'Abdullah Al Mamun (Shoyon)',              
				'designation'      => 'Full Stack Web Developer', 
				'message'  => 'I am Full Stake Web Developer. I create websites and web applications using such technologies as HTMLS/CSS, JavaScript, PHP, Bootstrap, jQuery, MySql and such content management systems as Wordpress, Magento, etc. 
					Besides that, I have experience in graphic designing such as logo designing, vector portrait,cover designing etc . I have developed a wide range of websites for my university, startup companies and small businesses. 
					My core competency lies in complete end-end management of a new website development project, and I am seeking opportunities to build websites from the ground up for you or your business. I believe that my strong knowledge base and great experience are the keys to customer satisfaction. 
					My essential characteristics is professionalism, originality and innovation. 
					I place great importance on small details and try to bring something new to every project',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			
			],

			[
				'name'   => 'Shahabuddin Ahamed',              
				'designation'      => 'Full Stack Web Developer', 
				'message'  => 'I am Full Stake Web Developer. I create websites and web applications using such technologies as HTMLS/CSS, JavaScript, PHP, Bootstrap, jQuery, MySql and such content management systems as Wordpress, Magento, etc. 
					Besides that, I have experience in graphic designing such as logo designing, vector portrait,cover designing etc . I have developed a wide range of websites for my university, startup companies and small businesses. 
					My core competency lies in complete end-end management of a new website development project, and I am seeking opportunities to build websites from the ground up for you or your business. I believe that my strong knowledge base and great experience are the keys to customer satisfaction. 
					My essential characteristics is professionalism, originality and innovation. 
					I place great importance on small details and try to bring something new to every project',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			
			]

				
		]);

		$type = DB::table('member_types')->insert([

			[
				'type'   => 'Governing Body',  
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			
			],

			[
				'type'   => 'Teacher',  
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			
			],

			[
				'type'   => 'Staff',  
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			
			],

		]);

		$type = DB::table('links')->insert([

			[
				'title'   => 'Facebook',  
				'link'   => 'http://facebook.com/amsshoyon',  
				'type'   => '3',  
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			
			],

			[
				'title'   => 'Instagram',  
				'link'   => 'http://facebook.com/amsshoyon',  
				'type'   => '3',  
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			
			],

			[
				'title'   => 'Google+',  
				'link'   => 'http://facebook.com/amsshoyon',  
				'type'   => '3',  
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			
			],

		]);
	}
}
