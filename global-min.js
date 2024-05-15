function scroll_amount_Desktop(){
  let welcome_scroll = document.querySelector('.sub_welcomeBlock')
  let header = document.querySelector('div.lower_header--block');
  let page_cordinate = window.pageYOffset;
    if(page_cordinate > 42){
        header.classList.add('sticky-header');
    } else {
        header.classList.remove('sticky-header');}
    if (page_cordinate > 80){
        welcome_scroll.classList.add('welcome_scroll');
    } else{
        welcome_scroll.classList.remove('welcome_scroll')}
    
let row_infographic = document.querySelectorAll('.info_row');
row_infographic.forEach((row)=>{
    if(page_cordinate > 1217){
       row.classList.add('scroll_infographic');
    } else {
        row.classList.remove('scroll_infographic');}
})

let category = document.querySelectorAll('.category_element');
category.forEach((cards)=>{
    if(page_cordinate > 1735){
        cards.classList.add('pop_scroll');
    } else{
        cards.classList.remove('pop_scroll')}
})

let featured_product = document.querySelector('.product_buttons');
if(page_cordinate > 3040){
    featured_product.classList.add('button_scroll');
} else{
    featured_product.classList.remove('button_scroll');}

let red = document.querySelector('.rcRed');
let yellow = document.querySelector('.rcYellow');
let green = document.querySelector('.rcGreen');
let blue = document.querySelector('.rcBlue');

if(page_cordinate > 3405){
    red.classList.add('red_scroll');
} else {
    red.classList.remove('red_scroll');}

if(page_cordinate > 3650){
    yellow.classList.add('yellow_scroll');
} else {
    yellow.classList.remove('yellow_scroll');}

if(page_cordinate > 3885){
    green.classList.add('green_scroll');
} else {
    green.classList.remove('green_scroll');}

if(page_cordinate > 4143){
    blue.classList.add('blue_scroll');
} else {
    blue.classList.remove('blue_scroll');}

let usp_icon = document.querySelectorAll('div.usp_block');
usp_icon.forEach((icon, index)=>{
    if(page_cordinate > 4523){
    setInterval(()=>{
        icon.classList.add('icon_scroll');
    }, 200 * index)
  } else{
    icon.classList.remove('icon_scroll');}
})
}

document.addEventListener('scroll', scroll_amount_Desktop);

const mobile_navigation = document.querySelector('header div.head--mobile--nav i.fa-solid.fa-bars')
mobile_navigation.addEventListener('click', ()=>{
    let mobileSidebar = document.createElement('div');
    mobileSidebar.setAttribute('class', 'mobile--navBar');
    document.body.prepend(mobileSidebar);
    mobileSidebar.innerHTML = '<div><i class="fa-solid fa-xmark close--nav"></i></div><br><div><nav><ul><li>HOME</li><li>SHOP ALL</li><li>SHOP BY COLOR</li><li>BLOGS</li><li>ABOUT US</li><li>CONTACT</li></ul></nav></div>';
    let close_nav = document.querySelector('.close--nav');
    close_nav.addEventListener('click',()=>{
        mobileSidebar.remove()
    })
})

const shopByColor_navLinks = document.querySelector('div.nav_links ul li.shop_by_color');
const cancel_dropdown = document.querySelector('div.cancel_dropdown i.fa-solid.fa-xmark')

let isdrop = false;
shopByColor_navLinks.addEventListener('click', ()=>{
    let dropbox = document.querySelector('.dropdown_menu');
let dropdown_tilt = document.querySelector('li.shop_by_color i.fa-solid.fa-caret-down');

if(isdrop){
    dropbox.classList.remove('dropdown_visible');
    console.log('True');
    dropdown_tilt.classList.remove('drop_tilt');
} else {
    dropbox.classList.add('dropdown_visible');
    console.log('False');
    dropdown_tilt.classList.add('drop_tilt');
}
    isdrop = !isdrop;
})

const share_product = document.querySelector('span.product-share--button').addEventListener('click', ()=>{
    let pop = document.createElement('div');
    pop.setAttribute('class', 'share-product__jspop');
    pop.innerHTML = '<h3>Copy Product URL</h3><br><input type="text" class="product-url" value="" style="color: black;"/> <button class="copy-product-url">Copy</button><div class="close" style="cursor: pointer;">X</div>';
    document.body.prepend(pop)
let close_pop = document.querySelector('div.close');
close_pop.addEventListener('click', ()=>{
    pop.remove()
})

let inp_url = document.querySelector('input.product-url');
inp_url.value = window.location.href;

let copy_btn = document.querySelector('button.copy-product-url').addEventListener('click', ()=>{
    inp_url.select();
    document.execCommand('copy')
})
})

const quan_dec = document.querySelector('div.quantity--box button.minus'); 
const quan_inc = document.querySelector('div.quantity--box button.plus'); 
const quan_inp = document.querySelector('div.quantity--box input[type="number"]'); 

quan_dec.addEventListener('click', (ev)=>{
    ev.preventDefault();
if(quan_inp.value >= 1){
    quan_inp.value = parseInt(quan_inp.value) - 1;}
})

quan_inc.addEventListener('click', (ev)=>{
    ev.preventDefault();
if(quan_inp.value <= 9){
    quan_inp.value = parseInt(quan_inp.value) + 1;} 
})

const colors = document.querySelectorAll('input.absolute_colorName');
const colorVariant = document.querySelector('p.note_color')

colors.forEach((clr)=>{
    clr.addEventListener('click', ()=>{
        colorVariant.innerHTML = '<b>Color : </b> ' + clr.value;
    })
})