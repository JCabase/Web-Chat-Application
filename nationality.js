const url = 'nationality.json';


$(document).ready(function(){
  reqData();
  })


function reqData(){
    fetch(url)
    .then(res => res.json())
    .then(data =>{
        adder(data)
    })
    .catch((error) =>{
        console.error(error);
    })
}

function adder(data){
    console.log(data);
    data.forEach(element => {
        $("#nationality").append('<option value="'+element.nationality+'">'+element.nationality+'</option>');
      });
}