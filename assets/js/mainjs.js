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
