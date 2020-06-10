//setup for loops
var ind = 0;
//array of images
var categoryImages = ["./image/dog.jpg", "./image/cat.jpg", "./image/bird.jpg", "./image/lizard.jpg"];

//function for carousel
function carousel() {
    var change = document.getElementById("dogCategory");
    change.src = categoryImages[ind];
    ind++;
    if(ind>=categoryImages.length)
    { ind = 0; }
    setTimeout (carousel, 3000);
}
setTimeout (carousel, 3000);

//above is the javascript animation

//this is the add to cart function

function addToCart(e) {
    cart = $("#cartContent");
    name1 = $(e).attr("name");
    price = $(e).attr("price");
    qty = $(e).prev().val();

    cart.append("<p>Name: "+name1+" Price: $"+Number(price)*Number(qty) +"</p>")

} //end of add to cart function


//this is the invoice function
function invoice() {
    modal = document.getElementById("myModal");
    modal.style.display = "block";
    cross = document.getElementsByClassName("close")[0];
    console.log(cross);
    cross.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(mouseEvent) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    //take everything from the shopping cart
    $("#invoicePlace").empty();
    $("#invoicePlace").append($("#cartContent").children());
    $("#invoicePlace").append("<p>Total: "+total+"</p>");


} //end of invoice function
