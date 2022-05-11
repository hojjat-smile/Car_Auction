@extends('web.layout.layout')



@section('css')

@endsection


@section('main')

<div class="container">
     
    <div class="blog-page">
      <div class="row with forms">
        <div class="col-lg-4 col-md-4">
          <div class="sidebar right"> 
            <div class="utf_box_widget">
              <h3><i class="sl sl-icon-magnifier"></i> Search Filters</h3>




              
              <div class="utf_search_blog_input">
              
                 <div class="col-md-12">
                     
                   <input type="text" placeholder="make" value=""/>
                 </div>
                 <div class="col-md-12">
                   <input type="text" placeholder="Model" value=""/>
                 </div>
                 <div class="col-md-12">
                   <input type="text" placeholder="Location" value=""/>
                 </div>
                 <div class="col-md-12">
                   <input type="text" placeholder="Mileage" value=""/>
                 </div>
                 <div class="col-md-12">
                   <input type="text" placeholder="Year" value=""/>
                 </div>

                

                 <div class="checkboxes one-in-row margin-bottom-15">
					<input id="check-a" type="checkbox" name="check">
					<label for="check-a">Tesla</label>
					<input id="check-b" type="checkbox" name="check">
					<label for="check-b">Tesla</label>
					<input id="check-c" type="checkbox" name="check">
					<label for="check-c">Tesla</label>
					<input id="check-d" type="checkbox" name="check">
					<label for="check-d">Tesla</label>
					<input id="check-e" type="checkbox" name="check" >
					<label for="check-e">Tesla</label>
					<input id="check-f" type="checkbox" name="check" >
					<label for="check-f">Tesla</label>
					<input id="check-g" type="checkbox" name="check">
					<label for="check-g">Tesla</label>	
					<input id="check-h" type="checkbox" name="check">
					<label for="check-h">Tesla</label>
				</div>
                <button class="button fullwidth_block margin-top-5">Update</button>
              
            </div>
              
              
        
              
              
              <div class="clearfix"></div>
            </div>
            
			
			
           
			
			
				
            <div class="clearfix"></div>            
          </div>
        </div>
        <!-- The loop and retrieval of data would occur here -->
        <!-- data is read from the database and put into this section -->
        <div class= "col-lg-8 col-md-8">
            <div class="row">
          <div class="col-lg-6 col-md-12"> <a href="listings_single_page_1.html" class="utf_listing_item-container" data-marker-id="1">
            <div class="utf_listing_item"> <img src="images/utf_listing_item-01.jpg" alt=""> <span class="tag"><i class="im im-icon-Hotel"></i> Hotels</span> <span class="featured_tag">Featured</span>
			  <span class="utf_closed">Closed</span>
              <div class="utf_listing_item_content"> 
				<div class="utf_listing_prige_block">							
					<span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $45 - $70</span>					
					<span class="utp_approve_item"><i class="utf_approve_listing"></i></span>
				</div>
                <h3>Chontaduro Barcelona</h3>
                <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>                               
				<span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
              </div>
            </div>
			<div class="utf_star_rating_section" data-rating="4.5">
			  <div class="utf_counter_star_rating">(4.5)</div>
			  <span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
			  <span class="like-icon"></span>
			</div>
            </a> 
		  </div>
          
        </div>
        </div>
        <!-- the loop would end here -->
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12">
            <div class="utf_pagination_container_part margin-top-20 margin-bottom-70">
              <nav class="pagination">
                <ul>
                  <li><a href="#"><i class="sl sl-icon-arrow-left"></i></a></li>
                  <li><a href="#" class="current-page">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>














		
        
  

@endsection



@section('script')

@endsection