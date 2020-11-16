let hammer = document.getElementById("hammer")
let screwdriver = document.getElementById("screwdriver")
let wrench = document.getElementById("wrench")
let free = document.getElementById("free")
let overnight = document.getElementById("overnight")
let threeday = document.getElementById("threeday")
let user = document.getElementById("user")
let pass = document.getElementById("pass")

const handleSubmit = () => {
    const mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/

    if(!user.value.match(mailformat)){
        alert("Invalid Username")
        return false
    }
    else if(pass.value.length < 1) {
        alert("Cannot use empty password")
        return false
    }
    

    if(hammer.value == 0 && screwdriver.value == 0 && wrench.value == 0) {
        alert("Please select an Item to purchase")
        return false
    }
    else if(hammer.value < 0 || screwdriver.value < 0 || wrench.value < 0) {
        alert("Cannot order negative items")
    }
    else if(!free.checked && !overnight.checked && !threeday.checked){
        alert("Please check a shipping time")
        return false
    }
    else{
        alert("Form submitted")
        return true
    }

}

const handleReset = () => {
	document.getElementById("shoppingForm").reset();
}
