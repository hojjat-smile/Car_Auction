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
              <div class="form-group">


<div class = "container">

<label>all<input type="radio" name="category[]" value="Laravel"> </label>

<label>Used<input type="radio" name="category[]" value="JQuery"></label>


<label> Salvage<input type="radio" name="category[]" value="Bootstrap"></label>
</div>








</div> 

              


            
              
            
              <div class="utf_search_blog_input">

              
  
              
   
              
                
                
                
                 <div class="custom-select">
                
                 <select>
                  <option value="0">Maker</option>
                  <option value="1">Audi</option>
                  <option value="2">BMW</option>
                  <option value="3">Citroen</option>
                  <option value="4">Ford</option>
                  <option value="5">Honda</option>
                  <option value="6">Jaguar</option>
                  <option value="7">Land Rover</option>
                  <option value="8">Mercedes</option>
                  <option value="9">Mini</option>
                  <option value="10">Nissan</option>
                  <option value="11">Toyota</option>
                  <option value="12">Volvo</option>
                </select>
                  </div>
                  <div class="custom-select">
                  
                <select>
                  <option value="0">Model </option>
                  <option value="1">Audi</option>
                  <option value="2">BMW</option>
                  <option value="3">Citroen</option>
                  <option value="4">Ford</option>
                  <option value="5">Honda</option>
                  <option value="6">Jaguar</option>
                  <option value="7">Land Rover</option>
                  <option value="8">Mercedes</option>
                  <option value="9">Mini</option>
                  <option value="10">Nissan</option>
                  <option value="11">Toyota</option>
                  <option value="12">Volvo</option>
                </select>
                  </div>
                  <div class="custom-select">
                <select>
                
                  <option value="0">Location </option>
                  <option value="1">Audi</option>
                  <option value="2">BMW</option>
                  <option value="3">Citroen</option>
                  <option value="4">Ford</option>
                  <option value="5">Honda</option>
                  <option value="6">Jaguar</option>
                  <option value="7">Land Rover</option>
                  <option value="8">Mercedes</option>
                  <option value="9">Mini</option>
                  <option value="10">Nissan</option>
                  <option value="11">Toyota</option>
                  <option value="12">Volvo</option>
                </select>
                  </div>
                  <div class="custom-select">
                <select>
                
                  <option value="0">Category </option>
                  <option value="1">Audi</option>
                  <option value="2">BMW</option>
                  <option value="3">Citroen</option>
                  <option value="4">Ford</option>
                  <option value="5">Honda</option>
                  <option value="6">Jaguar</option>
                  <option value="7">Land Rover</option>
                  <option value="8">Mercedes</option>
                  <option value="9">Mini</option>
                  <option value="10">Nissan</option>
                  <option value="11">Toyota</option>
                  <option value="12">Volvo</option>
                </select>
                  </div>
                  <div class="custom-select">
                <select>
                
                  <option value="0">Damage Type </option>
                  <option value="1">Audi</option>
                  <option value="2">BMW</option>
                  <option value="3">Citroen</option>
                  <option value="4">Ford</option>
                  <option value="5">Honda</option>
                  <option value="6">Jaguar</option>
                  <option value="7">Land Rover</option>
                  <option value="8">Mercedes</option>
                  <option value="9">Mini</option>
                  <option value="10">Nissan</option>
                  <option value="11">Toyota</option>
                  <option value="12">Volvo</option>
                </select>
                  </div>
                  <strong>Mileage range:</strong>
        <!-- declaration for first field -->
        <input type="text" class="form-control 
                input-sm" value="" placeholder ="min" />
  
        <!-- reducong the gap between them to zero -->
        <span class="input-group-btn" 
            style="width:0px align:center;">to</span>
  
        <!-- declaration for second field -->
        <input type="text" class="form-control 
                input-sm" value="" placeholder ="max" />
    </div>
                 
                 <div class="input-group">
      <strong>  Year range:
</strong>        <!-- declaration for first field -->
        <input type="text" class="form-control 
                input-sm" value="" placeholder ="starting point"  />
  
        <!-- reducong the gap between them to zero -->
        <span class="input-group-btn" 
            style="width:0px align:center;"> to</span>
  
        <!-- declaration for second field -->
        <input type="text" class="form-control 
                input-sm" value="" placeholder ="ending point"  />
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