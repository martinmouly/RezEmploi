const ethereumButton = document.querySelector('.enableEthereumButton');
const sendEthButton = document.querySelector('.sendEthButton');

let accounts = [];
//Sending Ethereum to an address
sendEthButton.addEventListener('click', () => {
  getAccount();
});
sendEthButton.addEventListener('click', () => {
  if(ethereum.getChainId!='0xa86a'){
    try {
      ethereum.request({
        method: "wallet_switchEthereumChain",
        params: [{ chainId: "0xa86a" }]
      });
    } catch (error) {
      alert(error.message);
    }
  }
  ethereum
    .request({
      method: 'eth_sendTransaction',
      params: [
        {
          from: accounts[0],
          to: '0xd5378b06f1fF211597210461480eac0C593C10e9',
          value: '9184E72A000',
          gasPrice: '0x09184e72a000',
          gas: '0x2710',
        },
      ],
    })
    .then((txHash) => console.log(txHash))
    .catch((error) => console.error);
});



async function getAccount() {
  accounts = await ethereum.request({ method: 'eth_requestAccounts' });
}