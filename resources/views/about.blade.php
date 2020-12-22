@extends('layouts/products')

@section('content')


<div class="container">

        <div class="about_div row">
          <div class="about_text col-md-6" style="padding-top: 2%">
            <h2 class="green_header">{{ $title }}</h2>
            <p style="padding-top: 2%;">
              The Incredibles is a team of web developers and designers from the Univeristy of Winnipeg PACE faculty. All team members helped with project management, proposal writing, design, front end development, back end development, and testing. Although the roles listed here were the areas that each team member focused on. 
            </p>
            <p>
              <strong>Pournima</strong>, the lead developer who coordinated the team throughout the project and helped everyone with troubleshooting. <strong>Shristi</strong>, the lead designer who created the beautiful user-interface of the site. <strong>Andrew</strong> configured the server, set-up the database and was instrumental in the functional programming for the site. <strong>Mayowa</strong>, our tireless Git manager who helped everyone resolve conflicts, and designed the authentication process. <strong>Jaspreet</strong> designed the list view page and implemented validation on all the forms. <strong>Amandeep</strong> designed the detail view on the front end and the admin dashboard on the back end. Jas and Aman collaborated on the category navigation to ensure that the user could effectviely navigate the list view and detail view. <strong>Erik</strong>, the project manager who assigned tasks, organized daily meetings and ensured that everyone had tasks to work on each day.
            </p>
          </div>
          <div class="about_img col-md-6">
          <div style="height: 5px; width: 300px; background-image: linear-gradient(to right, #00AEAE, #fff); margin-top: 5%; margin-left: 12%;"></div>
            <img src="/storage/images/general_images/about_phone.png" alt="about phone image" />
          <br/>
          <button type="button" class="btn btn-primary" style="color: #fff; text-decoration: none;margin-left: 12%;"
          onclick="window.location.href='/products';">
            Buy Now</button>
          <div style="height: 5px; width: 300px; background-image: linear-gradient(to right, #00AEAE, #fff); margin-top: 5%; margin-left: 12%;"></div>
          </div>
        </div>
          
        <div class="about_div2 row">
          <div class="about_img2 col-md-6">
            <img src="/storage/images/general_images/about_img2.png" alt="about phone image" />
          </div>
          <div class="about_text2 col-md-6">
           <h3 class="green_header">Features</h3>
            <p style="padding-top: 2%;">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem magna, elementum vehicula maximus sed, scelerisque in massa.  
            </p>
            <ul>
              <li>Donec posuere in massa nec dapibus. Donec non sodales enim.</li>
              <li>Suspendisse commodo neque pharetra nunc gravida ultricies.</li>
              <li>Pellentesque pellentesque semper lorem sed fringilla.</li>
              <li>Maecenas porta mi lectus, sit amet scelerisque lectus vehicula non.</li>
            </ul>
            <p>
              Donec posuere in massa nec dapibus. Donec non sodales enim. Suspendisse commodo neque pharetra nunc gravida ultricies. Pellentesque pellentesque semper lorem sed fringilla. Maecenas porta mi lectus, sit amet scelerisque lectus vehicula non. Ut fermentum quam in malesuada placerat. Etiam a tincidunt quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse tincidunt rhoncus ante ut venenatis. In fringilla odio id finibus tristique. Sed non eros sit amet eros auctor mattis.
            </p>
          </div>
        </div>

            
  </div><!-- container -->
  @stop()