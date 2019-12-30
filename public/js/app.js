// NavBar links swipe to active/null
const ratio = .6; 
const spies = document.querySelectorAll('[data-spy]');

let observer = null
/**
 * 
 * @param {HTMLElement} elem 
 *
 */

const activate = function (elem){
    
    const id = elem.getAttribute('id');
    console.log(id);
   
    const anchor = document.querySelector(`a[href="#${id}"]`)
        if(anchor === null){
            return null
        }
    anchor.parentElement.parentElement
        .querySelectorAll('.activeCustom')
        .forEach(node => {node.classList.remove('activeCustom')})
    
    if(id == 'header'){
        console.log("passage en if header");
        return
    }
    anchor.classList.add('activeCustom'); 
}



/** 
* @param {IntersectionObserverEntry[]} entries
*/

const callback = function(entries){
    entries.forEach(function (entry){
        if (entry.isIntersecting){
            //console.log(entry); 
            activate(entry.target);
        }
    } )
}

/**
 * 
 * @param {NodeListof.<Element>} elems 
 */
const observe = function (elems){
    if (observer !== null){
        elems.forEach(elem => observer.unobserve(elem));
    }
    
    const y = Math.round(window.innerHeight * ratio);
   
    
    observer = new IntersectionObserver(callback,{
        rootMargin: `-${window.innerHeight - y -1}px 0px -${y}px 0px`
    });
    spies.forEach( elem => observer.observe(elem));

}

/**
 * 
 * @param {Function} callback 
 * @param {number} delay 
 * @return {Function}
 */
 
const debounce = function (callback, delay){
    let timer;
    return function(){
        let args = arguments;
        let context = this;
        clearTimeout(timer);
        timer = setTimeout(function(){
            callback.apply(context, args);
        }, delay)
    }
}

if (spies.length > 0){
    observe(spies)
    let windowH = window.innerHeight;
    window.addEventListener('resize',debounce(function() {
       if(window.innerHeight !== windowH){
            observe(spies); 
            windowH = window.innerHeight;            
        } 

        },500))
}

// NavBar transparent to dark

let navBar = document.querySelector('.navbar');
let rect = navBar.getBoundingClientRect();
document.addEventListener('scroll',function(){
    let positionToTop = document.documentElement.scrollTop + rect.top
    if (positionToTop < 50){
        
        navBar.classList.remove('navBar');
        
    } else{
        navBar.classList.add('navBar');
    }

})


// Scroll smooth :) 


function scrollTo() {
	const links = document.querySelectorAll('.scroll');
	links.forEach(each => (each.onclick = scrollAnchors));
}

function scrollAnchors(e, respond = null) {
	const distanceToTop = el => Math.floor(el.getBoundingClientRect().top);
	e.preventDefault();
	var targetID = (respond) ? respond.getAttribute('href') : this.getAttribute('href');
	const targetAnchor = document.querySelector(targetID);
	if (!targetAnchor) return;
	const originalTop = distanceToTop(targetAnchor);
	window.scrollBy({ top: originalTop, left: 0, behavior: 'smooth' });
	const checkIfDone = setInterval(function() {
		const atBottom = window.innerHeight + window.pageYOffset >= document.body.offsetHeight - 2;
		if (distanceToTop(targetAnchor) === 0 || atBottom) {
			targetAnchor.tabIndex = '-1';
			targetAnchor.focus();
			window.history.pushState('', '', targetID);
			clearInterval(checkIfDone);
		}
	}, 100);
}

 scrollTo()


$(document).ready(function() {

	$('.simple-ajax-popup-align-top').magnificPopup({
		type: 'ajax',
		alignTop: true,
		overflowY: 'scroll' // as we know that popup content is tall we set scroll overflow by default to avoid jump
	});

	$('.simple-ajax-popup').magnificPopup({
		type: 'ajax'
	});
	
});







