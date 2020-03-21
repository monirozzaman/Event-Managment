
<style>

/* Button used to open the chat form - fixed at the bottom of the page */
.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
  font-size:25px;
	background-color:cyan;
	color:#FFF;
	border-radius:50px;
	text-align:center;
	box-shadow: 2px 2px 3px #999;
}

.my-float{
	margin-top:22px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btnn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btnn:hover, .open-button:hover {
  opacity: 1;
}

</style>


<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
       
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="#" target="_blank">Monalisa Mona</a>
  </p>
          </div>
        </div>
      </div>
    </footer>
    
  
    
    <div class="chat-popup" id="myForm" style="border-radius:30px;">
  <form action="/action_page.php" class="form-container" style="border-radius:30px;">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>
    <div class="row justify-content-center">
      <div class="btn-group">
        <button type="submit" class="btn btn-success btn-lg">Send</button>
        <button type="button" class="btn btn-danger btn-lg" onclick="closeForm()">Close</button>
    </div>
  </div>
</form>
</div>

    