let cont_box = document.querySelector('div#admin-panel--content-box.Rsub_wrapper')

const list_products = document.querySelector('li.link_products');

list_products.addEventListener('click', ()=>{
    fetch('../../CodeFiles/admin/product-admin.php')
    .then(resp=> resp.text())
    .then(data=> {
        cont_box.innerHTML = data;
    })
})

function addProduct__innerText(){
    let content_box = document.querySelector('main#main__content');
    let innerHML = '<style>form{gap: 20px;}div#admin-panel--content-box.Rsub_wrapper{overflow-y: scroll;} ::-webkit-scrollbar{width: 15px;} ::-webkit-scrollbar-track{background-color: #e7e7e7;} ::-webkit-scrollbar-thumb{background-color: rgb(199, 199, 199);border-radius: 6px;}</style><div class="add_product--heading"><h2 class="heading--product">Add Product</h2></div><div class="product--add--form-wrapper"><form action="../../CodeFiles/admin/product-submit.php" method="POST" autocomplete="off" enctype="multipart/form-data"><div class="left_block"><div class="product_firstBlock"><div><div><label>Title</label></div><input type="text" name="p-title" placeholder="Write Product Title"/><br> <br><div><label>Description</label></div><textarea name="p-desc" placeholder="Write Product Description"></textarea></div></div><br><div class="product_secondBlock"><div><label>Media</label><input type="file" name="p-image"/></div></div><br><div class="product_thirdBlock"><div><div><label>Price</label></div><input type="text" name="p-Sprice" placeholder="₹ 00.00"/><br><div><label>Compare-at-Price</label></div><input type="text" name="p-Cprice" placeholder="₹ 00.00"/></div></div><br><div class="product_fourthBlock"><div><label>Inventory</label></div><input type="text" name="p-inve" placeholder="Product Inventory"/></div></div><br><div class="right_block"><div class="product_newRightBlock"><div><label>Status</label> <br><select name="p-status"><option>Active</option><option>Draft</option></select></div><br><div class="product_newRightBlock1"><label>Category</label><br><input type="text" name="p-categ" placeholder="Write Product Category"/><br><label>Product Type</label> <br><input type="text" name="p-type" placeholder="Write Product Type" /><br><label>Vendor</label> <br><input type="text" name="p-vendor" placeholder="Write Product Vendor" /><br><label>Tags</label> <br><input type="text" name="p-tag" placeholder="Write Product Tags"/></div></div></div><input type="submit" name="p-submit" value="Save"/></form></div>';

    content_box.innerHTML = innerHML;
    console.log('working.............. hurahh!')}

    function addBlog__innerText(){
        let content_box = document.querySelector('main#main__content');
        let innerHML = '<style>form{gap: 20px;}div#admin-panel--content-box.Rsub_wrapper{overflow-y: scroll;} ::-webkit-scrollbar{width: 15px;} ::-webkit-scrollbar-track{background-color: #e7e7e7;} ::-webkit-scrollbar-thumb{background-color: rgb(199, 199, 199);border-radius: 6px;}</style><div class="add_product--heading"><h2 class="heading--product">Add Blog</h2></div><div class="product--add--form-wrapper"><form action="../../CodeFiles/admin/blog-submit.php" method="POST" autocomplete="off" enctype="multipart/form-data"><div class="left_block"><div class="product_firstBlock"><div><div><label>Title</label></div><input type="text" name="b-title" placeholder="Write Blog Title"/><br> <br><div><label>Description</label></div><textarea name="b-desc" placeholder="Write Blog Description"></textarea></div></div><br><div class="product_secondBlock"><div><label>Media</label><input type="file" name="b-image"/></div></div><br></div><br><div class="right_block"><div class="product_newRightBlock"><div><label>Status</label> <br><select name="b-status"><option>Active</option><option>Draft</option></select></div><br><div class="product_newRightBlock1"><label>Blog Category</label><br><input type="text" name="b-categ" placeholder="Write Blog Category"/><br><label>Author</label> <br><input type="text" name="b-author" placeholder="Write Blog Author" /></div></div></div><input type="submit" name="b-submit" value="Save"/></form></div>';
    
        content_box.innerHTML = innerHML;
        console.log('working.............. hurahh!')}


function pagination() {
let paginate = document.querySelectorAll('button.paginate');

paginate.forEach((event)=>{
    event.preventDefault();
})
}

function pagination_pushState(page){
    history.pushState({page: 'page1'}, 'pagination', `?page=${page}`)}

    function addPage__innerText(){
        let content_box = document.querySelector('main#main__content');
        let innerHML = '<style>form{gap: 20px;}</style><div class="add_page--heading"><h2 class="heading--page">Add Page</h2></div><div class="page--add--form-wrapper"><form action="../../CodeFiles/admin/page-submit.php" method="POST" autocomplete="off"><div class="left_block"><div class="page_firstBlock"><div><div><label>Title</label></div><input type="text" name="page-title" placeholder="Write Page Title"/><br><br><div><label>Description</label></div><textarea name="page-desc" placeholder="Write Page Content"></textarea></div></div><br></div><br><div class="right_block"><div class="page_newRightBlock"><div><label>Status</label> <br><select name="page-status"><option>Visible</option><option>Hidden</option></select></div><br><div class="page_newRightBlock1"><label>Author</label> <br><input type="text" name="page-author" placeholder="Write Page Author" /></div></div></div><input type="submit" name="page-submit" value="Save"/></form></div>';
    
        content_box.innerHTML = innerHML;
        console.log('working.............. hurahh!')}

const list_pages = document.querySelector('li.menu_link.link_pages');

list_pages.addEventListener('click', ()=>{
    fetch('../../CodeFiles/admin/page-admin.php')
    .then(resp=> resp.text())
    .then(data=> {
        cont_box.innerHTML = data;
    })
})
// quantity--box

const list_order = document.querySelector('li.link_orders');

list_order.addEventListener('click', ()=>{
    fetch('../../CodeFiles/admin/order-admin.php')
    .then(resp=> resp.text())
    .then(data=> {
        cont_box.innerHTML = data;
    })
})

const list_blog = document.querySelector('li.link_blog');
list_blog.addEventListener('click', ()=>{
    fetch('../../CodeFiles/admin/blog-admin.php')
    .then(resp=> resp.text())
    .then(data=> {
        cont_box.innerHTML = data;
    })
})

const list_customer = document.querySelector('li.link_customers');
list_customer.addEventListener('click', ()=>{
    fetch('../../CodeFiles/admin/customer-admin.php')
    .then(resp=> resp.text())
    .then(data=> {
        cont_box.innerHTML = data;
    })
})

const list_settings = document.querySelector('li.link_settings');
list_settings.addEventListener('click', ()=>{
    let settings_box = document.createElement('div');
    settings_box.setAttribute('class', 'customjs--settings');
    document.body.append(settings_box);
    settings_box.innerHTML = '<header id="settings--customJS"><div class="setting--icon_name"><i class="fa-solid fa-gear"></i><b>Settings</b></div><div class="close_setting"><i class="fa-solid fa-xmark setting_close"></i></div></header><div class="middle_content--box"><div class="list--elem--setting"><ul><li></li></ul></div> <div class="list-content--setting"></div></div>';

let overlay = document.createElement('div');
overlay.setAttribute('class', 'setting--overlay')
document.body.prepend(overlay)

const close_btn = document.querySelector('i.setting_close');
    close_btn.addEventListener('click', ()=>{
        settings_box.remove();
        overlay.remove();
    })

})