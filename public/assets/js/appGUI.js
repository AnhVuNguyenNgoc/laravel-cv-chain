if (typeof web3 !== 'undefined') {
      web3 = new Web3(web3.givenProvider );
    } else {
     web3= new Web3(new Web3.providers.HttpProvider("https://ropsten.infura.io/v3/f7778f45fb3c410bba5124725a804988"))
}

 $(document).ready(function(){

 	function getBalance(){

	 	web3.eth.getBalance(account.address).then((wei)=>{

	 		let amountether=web3.utils.fromWei(wei,'ether');

			 $("#amountether").text(" "+amountether+" ether");
		});
  	}     
  	getBalance()
})

//account của trường 
var account={
	address:'',
	privateKey:'',
	contractABI:[{"constant":true,"inputs":[],"name":"totalDiploma","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"onwer","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"","type":"uint256"}],"name":"diplomas","outputs":[{"name":"idDiploma","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_idDiploma","type":"string"}],"name":"setDiploma","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"nameSchool","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[],"name":"getSchoolInformation","outputs":[{"name":"","type":"string"},{"name":"","type":"address"},{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"inputs":[],"payable":false,"stateMutability":"nonpayable","type":"constructor"}],
	contractAddress:'',
}

//smart contract thay đổi thì contract ABI thay đổi. Nhưng ko bao h thay đổi contract ABI mà ta 
//contract ABI có sử dụng 1 lần khi deploy thui ah 


function initAccount(){

	// account.address=document.getElementById("accountaddress").value;
	
	let tempkey=document.getElementById("accountkey").value;
	tempkey=tempkey.substring(2,tempkey.length);
	account.privateKey=tempkey
}
initAccount()

var statusTx=0;

function setStatusTx(value){
	statusTx=value;
}

//--done--
function getStatusTxFromEthereumApi(txhash){

	var request = new XMLHttpRequest();

	request.open('GET', 'https://api-ropsten.etherscan.io/api?module=transaction&action=gettxreceiptstatus&txhash='+txhash+'&apikey=ZS7I9PHKH96N7F7WN84EIA38FGC58DQ2YD', true);
	
	request.onload = function () {

	  // Begin accessing JSON data here
	  var data = JSON.parse(this.response);

	  if (request.status >= 200 && request.status < 400) {

	   statusTx= data.result.status;

	  } else {
	    console.log('error');
	  }
	}
	request.send();
}

function load_ajax(){

     $.ajax({
            url : "certificate_insert.php", // gửi ajax đến file result.php
            type : "post", // chọn phương thức gửi là post
            dataType:"text",
            data : { // Danh sách các thuộc tính sẽ gửi đi
                 studentname : $('#studentname').val(),
                 studentgender : $('#studentgender').val(),
                 // major:$('#major').val(),
                 studentrank:$('#studentrank').val(),
                 iduser:$('#iduser').val()
            },
            success : function (result){
                // Sau khi gửi và kết quả trả về thành công thì gán nội dung trả về
                // đó vào thẻ div có id = result
                alert(result)
            }
     });
}    

function insertDiploma(){

	if(account.contractAddress==''){
		deploySmartContract();
	}else {
		sendTxToSmartContract();
	}
}

// ==done==
function deploySmartContract(){

  	let privateKey = new EthJS.Buffer.Buffer(account.privateKey,'hex')

 	const dataContract= '0x6060604052341561000f57600080fd5b60408051908101604052600381527f534755000000000000000000000000000000000000000000000000000000000060208201526000908051610056929160200190610077565b5060018054600160a060020a03191633600160a060020a0316179055610112565b828054600181600116156101000203166002900490600052602060002090601f016020900481019282601f106100b857805160ff19168380011785556100e5565b828001600101855582156100e5579182015b828111156100e55782518255916020019190600101906100ca565b506100f19291506100f5565b5090565b61010f91905b808211156100f157600081556001016100fb565b90565b6105ff806101216000396000f3006060604052600436106100775763ffffffff7c010000000000000000000000000000000000000000000000000000000060003504166329db0369811461007c5780633433edd9146100a157806335dfc1c3146100dd57806376e120fa1461016a5780639b87b282146101bd578063e3978af5146101d0575b600080fd5b341561008757600080fd5b61008f61027f565b60405190815260200160405180910390f35b34156100ac57600080fd5b6100b4610285565b60405173ffffffffffffffffffffffffffffffffffffffff909116815260200160405180910390f35b34156100e857600080fd5b6100f36004356102a1565b60405160208082528190810183818151815260200191508051906020019080838360005b8381101561012f578082015183820152602001610117565b50505050905090810190601f16801561015c5780820380516001836020036101000a031916815260200191505b509250505060405180910390f35b341561017557600080fd5b6101bb60046024813581810190830135806020601f8201819004810201604051908101604052818152929190602084018383808284375094965061035795505050505050565b005b34156101c857600080fd5b6100f36103ae565b34156101db57600080fd5b6101e361044c565b60405173ffffffffffffffffffffffffffffffffffffffff831660208201526040810182905260608082528190810185818151815260200191508051906020019080838360005b8381101561024257808201518382015260200161022a565b50505050905090810190601f16801561026f5780820380516001836020036101000a031916815260200191505b5094505050505060405180910390f35b60025481565b60015473ffffffffffffffffffffffffffffffffffffffff1681565b6003602052806000526040600020600091509050806000018054600181600116156101000203166002900480601f01602080910402602001604051908101604052809291908181526020018280546001816001161561010002031660029004801561034d5780601f106103225761010080835404028352916020019161034d565b820191906000526020600020905b81548152906001019060200180831161033057829003601f168201915b5050505050905081565b6001543373ffffffffffffffffffffffffffffffffffffffff90811691161461037f57600080fd5b60025460009081526003602052604090208180516103a1929160200190610526565b5050600280546001019055565b60008054600181600116156101000203166002900480601f0160208091040260200160405190810160405280929190818152602001828054600181600116156101000203166002900480156104445780601f1061041957610100808354040283529160200191610444565b820191906000526020600020905b81548152906001019060200180831161042757829003601f168201915b505050505081565b6104546105a4565b6000806000600160009054906101000a900473ffffffffffffffffffffffffffffffffffffffff16600254828054600181600116156101000203166002900480601f0160208091040260200160405190810160405280929190818152602001828054600181600116156101000203166002900480156105145780601f106104e957610100808354040283529160200191610514565b820191906000526020600020905b8154815290600101906020018083116104f757829003601f168201915b50505050509250925092509250909192565b828054600181600116156101000203166002900490600052602060002090601f016020900481019282601f1061056757805160ff1916838001178555610594565b82800160010185558215610594579182015b82811115610594578251825591602001919060010190610579565b506105a09291506105b6565b5090565b60206040519081016040526000815290565b6105d091905b808211156105a057600081556001016105bc565b905600a165627a7a72305820825ea9235f0c374be6ac9098d5f947b8edfa0af67ef0e596302b579a50821ed40029'

	web3.eth.getTransactionCount(account.address,(err,txNonce)=>{

		var txObject={
			nonce: web3.utils.toHex(txNonce),
			gasLimit:web3.utils.toHex(4700000),
			gasPrice:web3.utils.toHex(web3.utils.toWei('10','gwei')),
			data:dataContract
		}
		//Step 2: signed tx
		var tx=new EthJS.Tx(txObject);
		tx.sign(privateKey);

		const serializedTx=tx.serialize();
		const rawTransaction="0x"+serializedTx.toString('hex');

		//Step 3: sendRawTransaction
		web3.eth.sendSignedTransaction(rawTransaction,(err,txHash)=>{
			if(!err)
				{
					//đưa tx hash chưa chắc là thành công nha
					console.log('transaction hash: ',txHash);

					let interval_obj = setInterval(function(){

				   		getStatusTxFromEthereumApi(txHash);

				   		console.log('giao dịch smart contract đang pending',statusTx);

				   		if( statusTx == 1 ){

				   			 clearInterval(interval_obj);

				   			 console.log('giao dịch smart contract thành công ',status);

				   			 web3.eth.getTransactionReceipt(txHash).then((data)=>{
				   			 	account.contractAddress=data.contractAddress;
				   			 	setStatusTx(0);
				   			 	 return sendTxToSmartContract();
				   			 })
				   		}

					}, 3000);

				}
			console.log(err)
		})
	})
}

// ==done==
function sendTxToSmartContract(){

  	let privateKey = new EthJS.Buffer.Buffer(account.privateKey,'hex')

	let contract = new web3.eth.Contract(account.contractABI,account.contractAddress);

	web3.eth.getTransactionCount(account.address,(err,txNonce)=>{
		
		let dataContract=contract.methods.setDiploma('D1').encodeABI();		   
		
		var txObject={
			nonce: web3.utils.toHex(txNonce),
			gasLimit:web3.utils.toHex(4600000),
			gasPrice:web3.utils.toHex(web3.utils.toWei('10','gwei')),

			to:account.contractAddress,
			data:dataContract
		}

		//Step 2: signed tx
		var tx=new EthJS.Tx(txObject);
		tx.sign(privateKey);

		const serializedTx=tx.serialize();
		const rawTransaction="0x"+serializedTx.toString('hex');

		//Step 3: sendRawTransaction
		web3.eth.sendSignedTransaction(rawTransaction,(err,txHash)=>{
			if(!err)
				{
					//thành công r sao nè
					console.log('transaction hash: ',txHash);

					let interval_obj = setInterval(function(){

				   		getStatusTxFromEthereumApi(txHash);

				   		console.log('giao dịch đang pending',statusTx);

				   		if( statusTx == 1 ){

				   			 clearInterval(interval_obj);

				   			 console.log('giao dịch thành công ',status);

				   			 load_ajax();
				   		}

					}, 3000);
				
				}
			console.log(err)
		})
	})
}

function callDataFromSmartContract(){
	let contract = new web3.eth.Contract(account.contractABI,account.contractAddress);

	contract.methods.getSchoolInformation().call({from: account.address}, function(error, result){
   	 console.log(result)
	});
}

