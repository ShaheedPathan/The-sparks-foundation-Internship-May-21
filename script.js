//function for sending money
function sendMoney(){
    var enterName = document.getElementById("enterName").value;
    var enterAmount = parseInt(document.getElementById("enterAmount").value);
    var enterSName = document.getElementById("enterSName").value;
    var findSenderBankAccount = enterSName + "BankBalance";
    var findSenderId=enterSName+"Id";
    var findSenderName=enterSName+"Name";
    var findSenderEmail=enterSName+"Email";
    var enterSAmount =parseInt(document.getElementById(findSenderBankAccount).innerHTML);
    var enterSId =parseInt(document.getElementById(findSenderId).innerHTML);
    var enterSName =(document.getElementById(findSenderName).innerHTML);
    var enterSEmail =(document.getElementById(findSenderEmail).innerHTML);
    //if sender have less amount of money than amount user want to transfer
    if (enterAmount > enterSAmount) 
    {
       alert("Insufficient Balance.")
    }
    else 
    {
       var findUserBankAccount = enterName + "BankBalance";
    var findRecieverId=enterName + "Id";

    var enterRId =parseInt(document.getElementById(findRecieverId).innerHTML);
    var enterRName =(document.getElementById(enterName+"Name").innerHTML);
    var enterREmail =(document.getElementById(enterName+"Email").innerHTML);
       var finalAmount = parseInt(document.getElementById(findUserBankAccount).innerHTML) + enterAmount;
       var myAccountBalance = parseInt(document.getElementById(findSenderBankAccount).innerHTML) - enterAmount;
       $.ajax({
        method:"POST",
        url: "config.php",
        data:{
            Sbalance:myAccountBalance,
            SName:enterSName,
            Sid: enterSId,
            SEmail:enterSEmail,
            Rbalance:finalAmount,
            Rid: enterRId,
            RName: enterRName,
            REmail:enterREmail,
            transAmount:enterAmount


        },
        success: function(data){
            
            alert(`Successful Transacticonfigon !! 
            $${enterAmount} is sent to ${enterName}@email.com.`)
            parent.window.location.reload();
     
    }});
       //document.getElementById(findSenderBankAccount).innerHTML = myAccountBalance;
       //document.getElementById(findUserBankAccount).innerHTML = finalAmount;
    //    alert(`Successful Transaction !! 
    //     $${enterAmount} is sent to ${enterName}@email.com.`)
 
       // transaction history 
       var createPTag = document.createElement("li");
       var textNode = document.createTextNode(`Rs ${enterAmount} is sent from the sender with Email-id ${enterSName}@email.com to recepient with Email-id ${enterName}@email.com on ${Date()}.`);
       createPTag.appendChild(textNode);
       var element = document.getElementById("transaction-history-body");
       element.insertBefore(createPTag, element.firstChild);

    }
 }