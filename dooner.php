<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     
    
        .const{
            height: 40vh;
            width: 50vw;
          border: 2px solid gray;
            justify-content: center;
            text-align: center;
            margin: auto;
            margin-top: 50px;
            padding: 5px;
            box-shadow: 2px 2px 2px 2px ;
            background-image: url(https://static.vecteezy.com/system/resources/thumbnails/012/205/415/small_2x/blood-donation-or-heart-surgery-concept-human-holding-blood-and-heart-shape-papers-with-heart-rate-beat-photo.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        .lab{
            display: flex;
            justify-content: center;
            gap: 20px;
            font-weight: bold;
            margin: 40px;
            
        }
        .pro{
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 40px;
            font-weight: bold;
            margin-left:45px;
        }
        .submit{
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 40px;
        }
        .submit input{
            box-shadow: 1px 1px 1px 1px;
        }
        #btn{
            background-color: rgb(40, 40, 218);
            color: white;
            width: 80px;
            height: 25px;
            border-radius: 5px;
        }
        .table table{
            border: 2px solid;
            width: 800px;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .table{
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }
        
      
    </style>
</head>
<body>
    <?php include "./nav.php";?>
    <div class="main">
        <div class="const">
            <form action="">
                <div class="lab">
            <label  for="grp">Enter your blood group </label>
       
        
            <select name="Blood_Grp" id="grp">
                <option value="a+">A+</option>
                <option value="a-">A-</option>
                <option value="ab+">AB+</option>
                <option value="ab-">AB-</option>
                <option value="b+">B+</option>
                <option value="b-">B-</option>
                <option value="o+">O+</option>
                <option value="o-">O-</option>

            </select><br>
        </div>
        <div class="pro">
            <label for="city">Enter your city</label>
            <input type="text" id="city" name="address">
            
        </div>
        <div class="submit">
       <button id="btn">submit</button>
    </div>
        </form>
        </div>
        <div class="table">
            <table border="2" id="table">
                <th>
                    <tr>
                    <td>name</td>
                    <td>email</td>
                    <td>address</td>
                    <td>mobile_number</td>
                    <td>blood_grp</td>
                </tr>
                </th>
                <tbody id="tbody">

                </tbody>
            </table>
        </div>
    </div>
    <?php include './footer.php';?>
</body>
<script>
    const blood_grp = document.getElementById('grp');
    const city = document.getElementById('city');

const btn = document.getElementById('btn');
 
btn.addEventListener('click',function (e) { e.preventDefault();

    fetch(`./controller/donarserch.php?blood_grp=${blood_grp.value}&city=${city.value}`)
    .then(responce=>responce.json())
    .then(responce=>{
        const table = document.getElementById('table');
        const tbody = document.getElementById('tbody');
        responce.map((data)=>{
            const tr = document.createElement('tr');
            const td1 =document.createElement('td');
            const td2 =document.createElement('td');
            const td3 =document.createElement('td');
            const td4 =document.createElement('td');
            const td5 =document.createElement('td');
            td1.innerText = data.name;
            td2.innerText=data.email;
            td3.innerText=data.address;
            td4.innerText=data.mobile_number;
            td5.innerText=data.blood_grp;

            tr.appendChild(td1);
            tr.appendChild(td2);
            tr.appendChild(td3);
            tr.appendChild(td4);
            tr.appendChild(td5);
            tbody.appendChild(tr);

        })

    })

    
})


</script>
</html>