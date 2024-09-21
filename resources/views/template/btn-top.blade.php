
<button class="shadow-sm" onclick="topFunction()" id="myBtn" title="Go to top"><h4><i class="bi bi-chevron-up"></i></h4></button>

<style>
    
#myBtn {
    display: none;
    position: fixed;
    bottom: 50px;
    right: 30px;
    z-index: 200;
    font-size: 18px;
    border: none;
    outline: none;
    background-color: #4bca88;
    color: white;
    cursor: pointer;
    padding: 13px;
    padding-top: 9px;
    padding-bottom: 3px;
    border-radius: 50%;
    border: 4px solid rgba(255, 255, 255, .6);
  }
  
  #myBtn:hover {
    background-color: #188d51;
  }

  @media (max-width:450px) {

      #myBtn {
          display: none;
          position: fixed;
          bottom: 96px;
          right: 20px;
          z-index: 200;
          font-size: 18px;
          border: none;
          outline: none;
          background-color: #4bca88;
          color: white;
          cursor: pointer;
          padding: 13px;
          padding-top: 9px;
          padding-bottom: 3px;
          border-radius: 50%;
          border: 2px solid white;
      }

      #myBtn:hover {
          background-color: #188d51;
      }

}

</style>
