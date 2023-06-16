function gohome() {
    // GO BACK HOME
    location.href = `${location.origin}/wordpress`;
    
}
function showSubMenu() {
    // SHOW SUBMENU
    document.getElementById("submenu").style.display = "block";
}
var close_menu = document.getElementById("close_menu");
close_menu.addEventListener('mouseleave', function(event) {
    if (event.target === close_menu) {
        // HIDE SUBMENU
        document.getElementById("submenu").style.display = "none";
    }
});
function services(num) {
    if(num == 1) {
        location.href = `${location.origin}/wordpress/services-dedicated`;
    }
    else {
        location.href = `${location.origin}/wordpress/services-shared`;
    }
}

// PRICING
document.getElementById("dediacted_service").style.display = "none";
function pricing(num) {
    if(num == 1) {
        // Show Shared Team Pricing
        document.getElementById("shared_service").style.display = "block";
        
        // Remove Dedicated Team Pricing
        document.getElementById("dediacted_service").style.display = "none";
        
        // SWAP CLASSES
        document.getElementById("btn_shared").classList.remove("btn_3rd");
        document.getElementById("btn_shared").classList.add("btn_main");

        document.getElementById("btn_dedicated").classList.remove("btn_main");
        document.getElementById("btn_dedicated").classList.add("btn_3rd");

    }
    else {
        // Remove Shared Team Pricing
        document.getElementById("shared_service").style.display = "none";
        
        // Show Dedicated Team Pricing
        document.getElementById("dediacted_service").style.display = "block";

        // SWAP CLASSES
        document.getElementById("btn_shared").classList.remove("btn_main");
        document.getElementById("btn_shared").classList.add("btn_3rd");

        document.getElementById("btn_dedicated").classList.remove("btn_3rd");
        document.getElementById("btn_dedicated").classList.add("btn_main");
        
    }
}

// FAQs
function open_faq(num) {
    if(num == 1) {
        var faq_height = document.getElementById("faq_1").clientHeight;
        if(parseInt(faq_height) != 0) {
            document.getElementById("faq_1").style.height = "0";
            document.getElementById("p_1").style.display = "none";
            
        }
        else {
            document.getElementById("p_1").style.display = "block";
            document.getElementById("faq_1").style.height = "fit-content";
        }
    }
    else if(num == 2) {
        var faq_height = document.getElementById("faq_2").clientHeight;
        if(parseInt(faq_height) != 0) {
            document.getElementById("faq_2").style.height = "0";
            document.getElementById("p_2").style.display = "none";
            
        }
        else {
            document.getElementById("p_2").style.display = "block";
            document.getElementById("faq_2").style.height = "fit-content";
        }
    }
    else if(num == 3) {
        var faq_height = document.getElementById("faq_3").clientHeight;
        if(parseInt(faq_height) != 0) {
            document.getElementById("faq_3").style.height = "0";
            document.getElementById("p_3").style.display = "none";
            
        }
        else {
            document.getElementById("p_3").style.display = "block";
            document.getElementById("faq_3").style.height = "fit-content";
        }
    }
    else if(num == 4) {
        var faq_height = document.getElementById("faq_4").clientHeight;
        if(parseInt(faq_height) != 0) {
            document.getElementById("faq_4").style.height = "0";
            document.getElementById("p_4").style.display = "none";
            
        }
        else {
            document.getElementById("p_4").style.display = "block";
            document.getElementById("faq_4").style.height = "fit-content";
        }
    }
    else if(num == 5) {
        var faq_height = document.getElementById("faq_5").clientHeight;
        if(parseInt(faq_height) != 0) {
            document.getElementById("faq_5").style.height = "0";
            document.getElementById("p_5").style.display = "none";
            
        }
        else {
            document.getElementById("p_5").style.display = "block";
            document.getElementById("faq_5").style.height = "fit-content";
        }
    }
}


// window.onload = function() {
//     // alert();
//     console.log('Hello World');
// };
  

// window.onload = function() {
//     const marquee = document.querySelector('.marquee');
//     const cards = Array.from(document.querySelectorAll('.card'));
  
//     let currentOffset = 0;
//     const cardWidth = cards[0].offsetWidth + 10; // Include margin
  
//     cards.forEach(card => {
//       const clonedCard = card.cloneNode(true);
//       marquee.appendChild(clonedCard);
//     });
  
//     const totalWidth = cardWidth * cards.length;
//     marquee.style.width = totalWidth + 'px';
  
//     function loop() {
//       currentOffset -= 1;
//       if (currentOffset <= -cardWidth) {
//         marquee.appendChild(marquee.firstElementChild);
//         currentOffset += cardWidth;
//       }
//       marquee.style.transform = `translateX(${currentOffset}px)`;
  
//       requestAnimationFrame(loop);
//     }
  
//     loop();
//   };
