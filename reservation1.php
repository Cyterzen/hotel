 <?php require "php/header.php";?>
 <?php require "php/footer.php";?>

		<style>
	body{background-image:url(images/hotel10.jpg)}
	</style> 

	 <div class="hotel_reserve_box">
         <h3> Reservation </h3><br>
         <form action="insert.php" method="POST">
             <div class="form-group">
                 <label>Room/Suite Type</label>
                 <select class="form-control" id="room_type" onchange="finalCost()" name="room_type" required>
                     <option value="0" selected>Select Room/Suite </option>
                     <option value="1"> Family Room </option>
                     <option value="2"> Two-bed Room </option>
                     <option value="3"> Premier Room </option>
                     <option value="4"> Deluxe Suite  </option>
                     <option value="5"> Luxury Suit </option>
                     <option value="6"> Presidential Suit </option>
                 </select>
             </div>
             <div class="form-group">
                 <label>Number of room/suite</label>
                 <select class="form-control" id="room_number" onchange="finalCost()" name="room_number" required>
                     <option value="0"> 0 </option>
                     <option value="1"> 1 </option>
                     <option value="2"> 2 </option>
                     <option value="3"> 3 </option>
                     <option value="4"> 4 </option>
                     <option value="5"> 5 </option>
                     <option value="6"> 6 </option>
                     <option value="7"> 7 </option>
                 </select>
             </div>
             <div class="form-group">
                 <label>Number of persons</label>
                 <select class="form-control" id="person_number" onchange="finalCost()" name="person_number" required>
                     <option value="0"> 0 </option>
                     <option value="1"> 1 </option>
                     <option value="2"> 2 </option>
                     <option value="3"> 3 </option>
                     <option value="4"> 4 </option>
                     <option value="5"> 5 </option>
                     <option value="6"> 6 </option>
                     <option value="7"> 7 </option>
                 </select>
             </div>
             <div class="form-group">
                 <label>Number of children</label>
                 <select class="form-control" id="child_number" onchange="finalCost()" name="child_number" required>
                     <option value="0"> 0 </option>
                     <option value="1"> 1 </option>
                     <option value="2"> 2 </option>
                     <option value="3"> 3 </option>
                     <option value="4"> 4 </option>
                     <option value="5"> 5 </option>
                     <option value="6"> 6 </option>
                     <option value="7"> 7 </option>
                 </select>
             </div>
             <div class="form-group">
                 <label>Restaurant facilities?</label>
                 <select class="form-control" id="res_facilities" onchange="finalCost()" name="res_facilities" required>
                     <option value="0" selected> Do you want restaurant facilities? </option>
                     <option value="2"> Yes </option>
                     <option value="0"> No </option>
                 </select>
             </div><br>
             <div class="form-group">
                 <td><input value="Reservation was successful" style="background-color: green;color: #fff;padding: 6px 70px;font-weight: 600;font-size: 18px; margin-left: 10px;border-radius: 5px;"></td>
             </div>
			 
         </form>
     </div>
