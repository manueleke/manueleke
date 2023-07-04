function showBox1() {
			var box1 = document.getElementById("box1");
			var box2 = document.getElementById("box2");
      var box3 = document.getElementById("box3");
			
			box1.classList.add("active");
			box2.classList.remove("active");
      box3.classList.remove("active");
		}

		function showBox2() {
			var box1 = document.getElementById("box1");
			var box2 = document.getElementById("box2");
      var box3 = document.getElementById("box3");
			
			box2.classList.add("active");
			box1.classList.remove("active");
      box3.classList.remove("active");
		}

    function showBox3() {
      var box1 = document.getElementById("box1");
			var box2 = document.getElementById("box2");
      var box3 = document.getElementById("box3");

      box3.classList.add("active");
      box1.classList.remove("active");
      box2.classList.remove("active");
    }