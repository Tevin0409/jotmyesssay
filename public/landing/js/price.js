let aclevel_prices=new Array();
aclevel_prices['HighSchool']=1;
aclevel_prices['Undergraduate']=1.3;
aclevel_prices['Masters']=1.6;
aclevel_prices['PhD']=2.0;

let currency=new Array();
currency['USD']=1;
currency['KSH']=106.02;
currency['EUR']=0.93;
currency['GBP']=0.86;

let no_pages=document.getElementById('quantity').value;
let no_ppt=document.getElementById('ppSliddes').value;

let spacing= new Array();
spacing['SingleSpaced']=1;
spacing['DoubleSpaced']=2;

let deadline_prices = new Array();
deadline_prices ['3Hrs']=45;
deadline_prices ['6Hrs']=40;
deadline_prices ['9Hrs']=35;
deadline_prices ['12Hrs']=30;
deadline_prices ['15Hrs']=29;
deadline_prices ['18Hrs']=27;
deadline_prices ['24Hrs']=25;
deadline_prices ['48Hrs']=24;
deadline_prices ['3days']=23;
deadline_prices ['6days']=21;
deadline_prices ['9days']=18;
deadline_prices ['12days']=15;

function getDeadline(){
    let getdeadline = document.getElementById('order_deadline');
    return deadline_prices[getDeadline];
}

let writing_category = new Array();
writing_category['Standard']=1;
writing_category['Premium']=1.25;
writing_category['Platinum']=1.35;

function getCategory(){
    let getcategory = document.getElementById('wquality');
    for(i=0; i<getcategory.length; i++){
        if(getcategory[i].checked){
            user_category = getcategory[i].value;
        }
    }
    return writing_category[user_category];

}



function getSpacing(){
    let getspacing =document.getElementById('citation');
    for(i=0; i<getspacing.length; i++){
        if(getspacing[i].checked){
            user_spacing = getspacing[i].value;
        }
    }
    return spacing[user_spacing];
}

function getAcademicLevel(){
    let getAcademicLevel =document.getElementById('aclevel');
    for (i=0; i < getAcademicLevel.length; i++) {
		if (getAcademicLevel[i].checked) {
			user_input = getAcademicLevel[i].value;
		}
	}

	return aclevel_prices[user_input];
}

function getCurrency(){
    let getcurrency = document.getElementById('currency');
    for(i=0; i<getcurrency.length;i++){
        if (getcurrency[i].checked){
            user_currency = getcurrency[i].value;
        }
    }

    return currency[user_currency];
}



function getVipSupport() {
	let getvipSupport = document.getElementById('vip');

	if(getvipSupport.checked) {
		return(10);
	} else {
		return(0);
	}
}

$(document).ready(function(){
	$(".pricing").on("keyup", ".quantity", function(){
		var price = +$(".price").data("price");
		var quantity = document.getElementById("quantity").value;

		$("#total").text("$" + price * quantity);
	})
})

function calculateTotal() {
    let total = getAcademicLevel + getCategory + getCurrency() + getDeadline() + getSpacing() + getVipSupport();
    let price = no_pages * no_ppt;
	let totalEl = document.getElementById('totalPrice');

	document.getElementById('totalPrice').innerHTML = "Your Total is: $" + price;
	totalEl.style.display = 'block';
}

