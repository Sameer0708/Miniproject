<?php
include("../Functions/functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buyer Homepage</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <script>
        function state() {
            var a = document.getElementById('states').value;

            if (a === '31') {
                var array = ['Andamans', 'Nicobars'];
            } else if (a === '01') {
                var array = ['Adilabad', 'Nizamabad', 'Karimnagar', 'Medak', 'Hyderabad', 'Rangareddi', 'Mahbubnagar', 'Nalgonda', 'Warangal', 'Khammam', 'Srikakulam', 'Vizianagaram', 'Visakhapatnam', 'East Godavari', 'West Godavari', 'Krishna', 'Guntur', 'Prakasam', 'Nellore', 'Cuddapah', 'Kurnool', 'Anantapur', 'Chittoor'];
            } else if (a === '02') {
                var array = ['Kokrajhar', 'Dhubri', 'Goalpara', 'Bongaigaon', 'Barpeta', 'Kamrup', 'Nalbari', 'Darrang', 'Marigaon', 'Nagaon', 'Sonitpur', 'Lakhimpur', 'Dhemaji', 'Tinsukia', 'Dibrugarh', 'Sibsagar', 'Jorhat', 'Golaghat', 'Karbi Anglong', 'North Cachar Hills', 'Cachar', 'Karimganj', 'Hailakandi'];
            } else if (a === '03') {
                var array = ['Pashchim Champaran', 'Purba Champaran', 'Sheohar *', 'Sitamarhi', 'Madhubani', 'Supaul *', 'Araria', 'Kishanganj', 'Purnia', 'Katihar', 'Madhepura', 'Saharsa', 'Darbhanga', 'Muzaffarpur', 'Gopalganj', 'Siwan', 'Saran', 'Vaishali', 'Samastipur', 'Begusarai', 'Khagaria', 'Bhagalpur', 'Banka *', 'Munger', 'Lakhisarai *', 'Sheikhpura *', 'Nalanda', 'Patna', 'Bhojpur', 'Buxar *', 'Kaimur (Bhabua) *', 'Rohtas', 'Jehanabad ', 'Aurangabad', 'Gaya', 'Nawada', 'Jamui *'];
            } else if (a === '04') {
                var array = ['Kachchh', 'Banas Kantha', 'Patan  *', 'Mahesana', 'Sabar Kantha', 'Gandhinagar', 'Ahmadabad', 'Surendranagar', 'Rajkot', 'Jamnagar', 'Porbandar  *', 'Junagadh', 'Amreli', 'Bhavnagar', 'Anand  *', 'Kheda', 'Panch Mahals', 'Dohad  *', 'Vadodara', 'Narmada  *', 'Bharuch', 'Surat', 'The Dangs', 'Navsari  *', 'Valsad'];
            } else if (a === '05') {
                var array = ['Panchkula *', 'Ambala', 'Yamunanagar', 'Kurukshetra', 'Kaithal', 'Karnal', 'Panipat', 'Sonipat', 'Jind', 'Fatehabad *', 'Sirsa', 'Hisar', 'Bhiwani', 'Rohtak', 'Jhajjar *', 'Mahendragarh', 'Rewari', 'Gurgaon', 'Faridabad'];
            } else if (a === '06') {
                var array = ['Chamba', 'Kangra', 'Lahul & Spiti', 'Kullu', 'Mandi', 'Hamirpur', 'Una', 'Bilaspur', 'Solan', 'Sirmaur', 'Shimla', 'Kinnaur'];
            } else if (a === '07') {
                var array = ['Kupwara', 'Baramula', 'Srinagar', 'Badgam', 'Pulwama', 'Anantnag', 'Leh (Ladakh)', 'Kargil', 'Doda', 'Udhampur', 'Punch', 'Rajauri', 'Jammu', 'Kathua'];
            } else if (a === '08') {
                var array = ['Belgaum', 'Bagalkot *', 'Bijapur', 'Gulbarga', 'Bidar', 'Raichur', 'Koppal *', 'Gadag *', 'Dharwad', 'Uttara Kannada', 'Haveri *', 'Bellary', 'Chitradurga', 'Davangere*', 'Shimoga', 'Udupi *', 'Chikmagalur', 'Tumkur', 'Kolar', 'Bangalore', 'Bangalore Rural', 'Mandya', 'Hassan', 'Dakshina Kannada', 'Kodagu', 'Mysore', 'Chamrajnagar*'];
            } else if (a === '09') {
                var array = ['Kasaragod', 'Kannur', 'Wayanad', 'Kozhikode', 'Malappuram', 'Palakkad', 'Thrissur', 'Ernakulam', 'Idukki', 'Kottayam', 'Alappuzha', 'Pathanamthitta', 'Kollam', 'Thiruvananthapuram'];
            } else if (a === '10') {
                var array = ['Sheopur *', 'Morena', 'Bhind', 'Gwalior', 'Datia', 'Shivpuri', 'Guna', 'Tikamgarh', 'Chhatarpur', 'Panna', 'Sagar', 'Damoh', 'Satna', 'Rewa', 'Umaria *', 'Shahdol', 'Sidhi', 'Neemuch *', 'Mandsaur', 'Ratlam', 'Ujjain', 'Shajapur', 'Dewas', 'Jhabua', 'Dhar', 'Indore', 'West Nimar', 'Barwani *', 'East Nimar', 'Rajgarh', 'Vidisha', 'Bhopal', 'Sehore', 'Raisen', 'Betul', 'Harda *', 'Hoshangabad', 'Katni *', 'Jabalpur', 'Narsimhapur', 'Dindori *', 'Mandla', 'Chhindwara', 'Seoni', 'Balaghat'];
            } else if (a === '11') {
                var array = ['Nandurbar *', 'Dhule', 'Jalgaon', 'Buldana', 'Akola', 'Washim *', 'Amravati', 'Wardha', 'Nagpur', 'Bhandara', 'Gondiya *', 'Gadchiroli', 'Chandrapur', 'Yavatmal', 'Nanded', 'Hingoli *', 'Parbhani', 'Jalna', 'Aurangabad', 'Nashik', 'Thane', 'Mumbai (Suburban) *', 'Mumbai', 'Raigarh', 'Pune', 'Ahmadnagar', 'Bid', 'Latur', 'Osmanabad', 'Solapur', 'Satara', 'Ratnagiri', 'Sindhudurg', 'Kolhapur', 'Sangli'];
            } else if (a == 12) {
                var array = ['Senapati', 'Tamenglong', 'Churachandpur', 'Bishnupur', 'Thoubal', 'Imphal West', 'Imphal East *', 'Ukhrul', 'Chandel'];
            } else if (a === '18') {
                var array = ['Thiruvallur', 'Chennai', 'Kancheepuram', 'Vellore', 'Dharmapuri', 'Tiruvannamalai', 'Viluppuram', 'Salem', 'Namakkal   *', 'Erode', 'The Nilgiris', 'Coimbatore', 'Dindigul', 'Karur  *', 'Tiruchirappalli', 'Perambalur  *', 'Ariyalur  *', 'Cuddalore', 'Nagapattinam  *', 'Thiruvarur', 'Thanjavur', 'Pudukkottai', 'Sivaganga', 'Madurai', 'Theni  *', 'Virudhunagar', 'Ramanathapuram', 'Thoothukkudi', 'Tirunelveli ', 'Kanniyakumari'];
            } else if (a === '39') {
                var array = ['Yanam', 'Pondicherry', 'Mahe', 'Karaikal'];
            } else if (a === '37') {
                var array = ['Lakshadweep'];
            } else if (a === '42') {
                var array = ['North Goa ', 'South Goa'];
            } else if (a === '34') {
                var array = ['Dadra & Nagar Haveli'];
            } else if (a === '36') {
                var array = ['Diu', 'Daman'];
            } else if (a === '23') {
                var array = ['Koriya *', 'Surguja', 'Jashpur *', 'Raigarh', 'Korba *', 'Janjgir - Champa*', 'Bilaspur', 'Kawardha *', 'Rajnandgaon', 'Durg', 'Raipur', 'Mahasamund *', 'Dhamtari *', 'Kanker *', 'Baster', 'Dantewada*'];
            } else if (a === '24') {
                var array = ['Garhwa *', 'Palamu', 'Chatra *', 'Hazaribag', 'Kodarma *', 'Giridih', 'Deoghar', 'Godda', 'Sahibganj', 'Pakaur *', 'Dumka', 'Dhanbad', 'Bokaro *', 'Ranchi', 'Lohardaga', 'Gumla', 'Pashchimi Singhbhum', 'Purbi Singhbhum', 'ORISSA', 'Bargarh  *', 'Jharsuguda  *', 'Sambalpur', 'Debagarh  *', 'Sundargarh', 'Kendujhar', 'Mayurbhanj', 'Baleshwar', 'Bhadrak  *', 'Kendrapara *', 'Jagatsinghapur  *', 'Cuttack', 'Jajapur  *', 'Dhenkanal', 'Anugul  *', 'Nayagarh  *', 'Khordha  *', 'Puri', 'Ganjam', 'Gajapati  *', 'Kandhamal', 'Baudh  *', 'Sonapur  *', 'Balangir', 'Nuapada  *', 'Kalahandi', 'Rayagada  *', 'Nabarangapur  *', 'Koraput', 'Malkangiri  *'];
            } else if (a === '21') {
                var array = ['Darjiling ', 'Jalpaiguri ', 'Koch Bihar ', 'Uttar Dinajpur', 'Dakshin Dinajpur *', 'Maldah ', 'Murshidabad ', 'Birbhum', 'Barddhaman ', 'Nadia ', 'North Twenty Four Parganas', 'Hugli ', 'Bankura ', 'Puruliya', 'Medinipur ', 'Haora ', 'Kolkata', 'South  Twenty Four Parganas'];
            } else if (a === '13') {
                var array = ['West Garo Hills', 'East Garo Hills', 'South Garo Hills *', 'West Khasi Hills', 'Ri Bhoi  *', 'East Khasi Hills', 'Jaintia Hills'];
            } else if (a === '22') {
                var array = ['North ', 'West', 'South', 'East'];
            } else if (a === '20') {
                var array = ['Saharanpur', 'Muzaffarnagar', 'Bijnor', 'Moradabad', 'Rampur', 'Jyotiba Phule Nagar *', 'Meerut', 'Baghpat *', 'Ghaziabad', 'Gautam Buddha Nagar *', 'Bulandshahr', 'Aligarh', 'Hathras *', 'Mathura', 'Agra', 'Firozabad', 'Etah', 'Mainpuri', 'Budaun', 'Bareilly', 'Pilibhit', 'Shahjahanpur', 'Kheri', 'Sitapur', 'Hardoi', 'Unnao', 'Lucknow', 'Rae Bareli', 'Farrukhabad', 'Kannauj *', 'Etawah', 'Auraiya *', 'Kanpur Dehat', 'Kanpur Nagar', 'Jalaun ', 'Jhansi', 'Lalitpur', 'Hamirpur', 'Mahoba *', 'Banda', 'Chitrakoot *', 'Fatehpur', 'Pratapgarh', 'Kaushambi *', 'Allahabad ', 'Barabanki', 'Faizabad', 'Ambedkar Nagar *', 'Sultanpur', 'Bahraich', 'Shrawasti *', 'Balrampur *', 'Gonda', 'Siddharthnagar', 'Basti', 'Sant Kabir Nagar *', 'Maharajganj', 'Gorakhpur', 'Kushinagar *', 'Deoria', 'Azamgarh', 'Mau', 'Ballia', 'Jaunpur', 'Ghazipur', 'Chandauli *', 'Varanasi', 'Sant Ravidas Nagar *', 'Mirzapur', 'Sonbhadra'];
            } else if (a === '17') {
                var array = ['Ganganagar', 'Hanumangarh *', 'Bikaner', 'Churu', 'Jhunjhunun', 'Alwar', 'Bharatpur', 'Dhaulpur', 'Karauli *', 'Sawai Madhopur', 'Dausa *', 'Jaipur', 'Sikar', 'Nagaur', 'Jodhpur', 'Jaisalmer', 'Barmer', 'Jalor', 'Sirohi', 'Pali', 'Ajmer', 'Tonk', 'Bundi', 'Bhilwara', 'Rajsamand *', 'Udaipur', 'Dungarpur', 'Banswara', 'Chittaurgarh', 'Kota', 'Baran *', 'Jhalawar'];
            } else if (a === '16') {
                var array = ['Gurdaspur', 'Amritsar', 'Kapurthala', 'Jalandhar', 'Hoshiarpur', 'Nawanshahr *', 'Rupnagar', 'Fatehgarh Sahib *', 'Ludhiana', 'Moga *', 'Firozpur', 'Muktsar *', 'Faridkot', 'Bathinda', 'Mansa *', 'Sangrur', 'Patiala'];
            } else if (a === '14') {
                var array = ['Mon', 'Tuensang', 'Mokokchung', 'Zunheboto', 'Wokha', 'Dimapur *', 'Kohima', 'Phek'];
            } else if (a === '19') {
                var array = ['West Tripura ', 'South Tripura ', 'Dhalai  *', 'North Tripura '];
            } else if (a === '38') {
                var array = ['Mamit *', 'Kolasib *', 'Aizawl', 'Champhai *', 'Serchhip *', 'Lunglei', 'Lawngtlai', 'Saiha *'];
            } else if (a === '32') {
                var array = ['Tawang', 'West Kameng', 'East Kameng', 'Papum Pare *', 'Lower Subansiri', 'Upper Subansiri', 'West Siang', 'East Siang', 'Upper Siang *', 'Dibang Valley', 'Lohit', 'Changlang', 'Tirap'];
            } else if (a === '33') {
                var array = ['Chandigarh'];
            } else if (a === '35') {
                var array = ['North West   *', 'North   *', 'North East   *', 'East   *', 'New Delhi', 'Central  *', 'West   *', 'South West   *', 'South  *'];
            } else if (a === '40') {
                var array = ['Uttarkashi', 'Chamoli', 'Rudraprayag *', 'Tehri Garhwal', 'Dehradun', 'Garhwal', 'Pithoragarh', 'Bageshwar', 'Almora', 'Champawat', 'Nainital', 'Udham Singh Nagar *', 'Hardwar'];
            }



            var string = "";
            for (let i = 0; i < array.length; i++) {
                string = string + "<option>" + array[i] + "</option>";
            }
            string = "<select nmae = 'lol'>" + string + "</select>"
            document.getElementById('district').innerHTML = string;

        }
    </script>
    <script>
        var a;

        function display() {
            if (a == 0) {
                document.getElementById("majic").style.visibility = "hidden";
                document.getElementById("show").style.visibility = "visible";
                return a = 1;
            } else {
                document.getElementById("majic").style.visibility = "visible";
                document.getElementById("show").style.visibility = "hidden";
                // document.getElementById("show").style. visibility= "hidden";
                return a = 0;
            }

        }
    </script>

    <style>
        .aligncenter {
            text-align: center;
        }

        a {
            color: goldenrod;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav {
            background-color: #292b2c;
        }

        .navbar-custom {
            background-color: #292b2c;
        }

        /* change the brand and text color */
        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-text {
            background-color: #292b2c;
        }

        .navbar-custom .navbar-nav .nav-link {
            background-color: #292b2c;
        }

        .navbar-custom .nav-item.active .nav-link,
        .navbar-custom .nav-item:hover .nav-link {
            background-color: #292b2c;
        }

        .firstimage {
            height: 500px;
            width: 100%;
        }

        .mybtn {
            border-color: green;
            border-style: solid;
        }

        .card {
            width: 100%;
            height: 100%;
            margin: 10px;
        }

        .right {
            display: flex;
        }

        .left {
            display: none;
        }

        .cart {
            /* margin-left:10px; */
            margin-right: -9px;
        }

        .profile {
            margin-right: 2px;

        }

        .login {
            margin-right: -2px;
            margin-top: 12px;
            display: none;
        }

        .searchbox {
            width: 60%;
        }

        .lists {
            display: inline-block;
        }

        .moblists {
            display: none;
        }

        .logins {
            text-align: center;
            margin-right: -30%;
            margin-left: 35%;
        }

        /* .images {
    transition: 0.5s;
} */

        .images:hover {

            height: 220px;
            box-shadow: 5px 5px 10px grey;
            transition: 0.3s;
        }

        .guard {
            width: 100%;
            text-align: center;
            border-bottom: 1px solid #ffc857;
            /* background-color: #ffc857; */
            line-height: 0.1em;
            margin: 10px 0 20px;
            /* font-family: serif; */
        }

        .guard span {
            background: white;
            padding: 0 10px;
        }

        /* .settings{
margin-left:10px;
} */
        @media only screen and (min-device-width:320px) and (max-device-width:480px) {
            .mycarousel {
                display: none;
            }

            .firstimage {
                height: auto;
                width: 90%;
            }

            .card {
                width: 80%;
                margin-left: 10%;
                margin-right: 10%;

            }

            .col {
                margin-top: 20px;
            }

            .right {
                display: none;
                background-color: #ff5500;
            }

            /* 
    .settings{
    margin-left:79%;
} */
            .left {
                display: flex;
            }

            .moblogo {
                display: none;
            }

            .logins {
                text-align: center;
                margin-right: 35%;
                padding: 15px;
            }

            .searchbox {
                width: 95%;
                margin-right: 5%;
                margin-left: 0%;
            }

            .moblists {
                display: inline-block;
                text-align: center;
                width: 100%;
            }

            .guard {
                /* width: 100%; */
                text-align: center;
                border-bottom: 1px solid #ffc857;
                /* background-color: #ffc857; */
                /* line-height: 0.1em; */
                /* margin: 10px 0 20px; */
                /* font-family: serif; */

            }

            .guard span {
                background: white;
                padding: 0 10px;
            }
        }




        /* Image Grig */


        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial;
            overflow-x: hidden;
        }

        .header {
            text-align: center;
            padding: 32px;
        }

        .row {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap;
            /* IE10 */
            flex-wrap: wrap;
            padding: 0 4px;
        }

        /* Create four equal columns that sits next to each other */
        .column {
            -ms-flex: 25%;
            /* IE10 */
            flex: 25%;
            max-width: 25%;
            padding: 0 4px;
        }

        .column img {
            margin-top: 8px;
            vertical-align: middle;
            width: 100%;
        }

        .myfooter {
            background-color: #292b2c;
            color: goldenrod;
            margin-top: 15px;
        }

        .aligncenter {
            text-align: center;
        }

        a {
            color: goldenrod;
        }

        #headings {
            /* text-shadow: 2px 1px #666666; */
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        @media screen and (max-width: 800px) {
            .kolum {
                flex: 50%;
                max-width: 50%;
                max-height: 40%;
            }
        }

        @media screen and (max-width: 600px) {
            .kolum {
                flex: 50%;
                max-width: 50%;
                max-height: 40%;
            }
        }

        .bg-footer {
            background: linear-gradient(rgba(52, 173, 84, .7), rgba(52, 173, 84, .7)), url(footer.png) center bottom no-repeat;
            background-size: contain;
        }

        @media (min-width: 991.98px) {
            .bg-footer {
                margin-top: 90px !important;
            }
        }

        .back-to-top {
            position: fixed;
            display: none;
            right: 30px;
            bottom: 0;
            border-radius: 0;
            z-index: 99;
        }

        .bg-testimonial {
            background: url(testimonial.jpg) top center no-repeat;
            background-size: cover;
        }

        .testimonial-carousel {
            background: rgba(52, 173, 84, .7);
        }

        .testimonial-carousel .owl-nav {
            position: absolute;
            width: calc(100% + 46px);
            height: 46px;
            top: calc(50% - 23px);
            left: -23px;
            display: flex;
            justify-content: space-between;
            z-index: 1;
        }

        .testimonial-carousel .owl-nav .owl-prev,
        .testimonial-carousel .owl-nav .owl-next {
            position: relative;
            width: 46px;
            height: 46px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            background: #FFFFFF;
            font-size: 22px;
            transition: .5s;
        }

        .testimonial-carousel .owl-nav .owl-prev:hover,
        .testimonial-carousel .owl-nav .owl-next:hover {
            color: var(--secondary);
        }

        .testimonial-carousel .owl-item img {
            width: 120px;
            height: 120px;
        }


        /* Responsive layout - makes a two column-layout instead of four columns */
        /* @media screen and (max-width: 800px) {
    .column {
        -ms-flex: 50%;
        flex: 50%;
        max-width: 50%;
    }
} */

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        /* @media screen and (max-width: 600px) {
    .column {
        -ms-flex: 100%;
        flex: 100%;
        max-width: 100%;
    }
} */
    </style>
    <!-- <script>
var a;

function display() {
    if (a == 0) {
        document.getElementById("majic").style.display = "none";
        document.getElementById("show").style.display = "inline-block";
        return a = 1;
    } else {
        document.getElementById("majic").style.visibility = "visible";
        document.getElementById("show").style.visibility = "hidden";
        // document.getElementById("show").style. visibility= "hidden";
        return a = 0;
    }

}
</script> -->
</head>

<body>
    <nav class="navbar navbar-expand-xl ">

        <div class=" flex-row-reverse left ">

            <div class="p-2">
                <div class="icon2">
                    <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:green ;margin-top:2px;">&#61562;</i></a>
                    <span id="icon" style="color:green"> <?php echo totalItems(); ?> </span>
                </div>
            </div>
            <div class="p-2 ml-5"><i class='far fa-user-circle' style='font-size:30px; color: green;margin-top:2px;'></i></div>
            <a class="float-left" href="bhome.php">
                <img src="agro.png" class="float-left mr-5 ml-0 " alt="Logo" style="height:70px;">
            </a>
        </div>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars p-1 " style="color:green;margin-right:-9%;font-size:28px;"></i></span>
        </button>
        <a class="float-left" href="bhome.php">
            <img src="agro.png" class="float-left mr-2 moblogo" alt="Logo" style="height:50px;">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <div class="input-group mb-1 ml-2 searchbox">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-search" style="font-size:20px;color:green; "></i></div>
                </div>
                <form action="SearchResult.php" method="get" enctype="multipart/form-data">
                 <input type="text" class="form-control" id="inlineFormInputGroup" name="search" placeholder="Search for fruits,vegetables or crops " style="width:500px;">
                 <textarea id="convert_text"></textarea>
                </form><button id="click_to_convert"><i class="fa-solid fa-microphone" style="color: #33ab07; font-size: 20px;"></i></button>
                <script>
                    click_to_convert.addEventListener('click', function() {
                        var speech = true;
                        window.SpeechRecognition = window.webkitSpeechRecognition;
                        const recognition = new SpeechRecognition();
                        recognition.interimResults = true;

                        recognition.addEventListener('result', e => {
                            const transcript = Array.from(e.results)
                                .map(result => result[0])
                                .map(result => result.transcript)
                            convert_text.innerHTML = transcript;
                        })

                        if (speech == true) {
                            recognition.start();
                        }
                    })
                </script>
            </div>
            <?php
            getUsername();
            ?>
            <div class="list-group moblists">

                <?php
                if (isset($_SESSION['phonenumber'])) {
                    echo "<a href='BuyerProfile.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Profile</a>";
                    echo "<a href= 'Transaction.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Transactions</a>";
                    echo "<a href='saveforlater.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Save For Later</a>";
                    echo "<a href='#' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Subscriptions</a>";
                    echo "<a href='farmer.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Farmers</a>";
                    echo "<a href='../Includes/logout.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Logout</a>";
                } else {
                    echo "<a href='../auth/BuyerLogin.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Login</a>";
                }
                ?>

            </div>
        </div>



        <div id="google_element"></div>
        <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
        <script>
            function loadGoogleTranslate() {
                new google.translate.TranslateElement("google_element");
            }
        </script>
        <div class=" flex-row-reverse right ">
            <div class="p-2 cart">
                <div class="icon2">
                    <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:green">&#61562;</i></a>
                    <span id="icon" style="color:green"> <?php echo totalItems(); ?> </span>
                </div>
            </div>
            <div class="dropdown p-2 settings ">
                <button class="btn  dropdown-toggle text-success" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Settings
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <?php
                    if (isset($_SESSION['phonenumber'])) {
                        echo "<a href='BuyerProfile2.php' class='dropdown-item  ' style='padding-right:-20px;'>Profile</a>";
                        echo "<a href='Transaction.php' class='dropdown-item ' style='padding-right:-20px;'>Transactions</a>";
                        echo "<a href='#' class='dropdown-item'  style='padding-right:-20px;'>Subscriptions</a>";
                        echo "<a href='saveforlater.php' class='dropdown-item' style='padding-right:-20px;'>Save For Later</a>";
                        echo "<a href='farmers.php' class='dropdown-item' style='padding-right:-20px;' >Farmers</a>";
                        echo "<a href='../Includes/logout.php' class='dropdown-item ' style='padding-right:-20px;'>Logout</a>";
                    } else {
                        echo "<a href='../auth/BuyerLogin.php' class='dropdown-item ' style='padding-right:-20px;'>Login</a>";
                    }
                    ?>
                </div>
            </div>


            <div class="text-success  login">Login</div>
        </div>

    </nav>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex d-lg-none">
            <h1 class="m-0 display-4 text-secondary"><span class="text-white">Farm</span>Fresh</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link mybtn dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false">Fruits</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="dropdownMenuButton">
                        <?php
                        getFruits();
                        ?>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link mybtn dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false">Vegetables</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <?php
                        getVegetables();
                        ?>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link mybtn dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false">Crops</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <?php
                        getCrops();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                        <div class="text-start p-5" style="max-width: 900px;">
                            <h1 class="text-white">Welcome</h1>
                            <h2 class="text-white">Organic Vegetables</h2>
                            <h3 class="display-1 text-white mb-md-4">Organic Vegetables For Healthy Life</h3>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                        <div class="text-start p-5" style="max-width: 900px;">
                            <h1 class="text-white">Welcome</h1>
                            <h2 class="text-white">Organic Fruits</h2>
                            <h3 class="display-1 text-white mb-md-4">Organic Fruits For Better Health</h3>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Banner Start -->
    <div class="container-fluid banner mb-5">
        <div class="container">
            <div class="row gx-0">
                <div class="col-md-6">
                    <div class="bg-primary bg-vegetable d-flex flex-column justify-content-center p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Organic Vegetables</h3>
                        <p class="text-white">Dolor magna ipsum elitr sea erat elitr amet ipsum stet justo dolor, amet lorem diam no duo sed dolore amet diam</p>
                        <a class="text-white fw-bold" href="">Read More<i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bg-secondary bg-fruit d-flex flex-column justify-content-center p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Organic Fruits</h3>
                        <p class="text-white">Dolor magna ipsum elitr sea erat elitr amet ipsum stet justo dolor, amet lorem diam no duo sed dolore amet diam</p>
                        <a class="text-white fw-bold" href="">Read More<i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Start -->


    <!-- product Start -->
    <div class="container">
        <div class="text-center">
            <!-- <h2 id="headings" class="destext">Fresh fruits</h2> -->
            <h1 id="headings" class="guard"><span><b>Fresh Fruits </b></span>
            </h1>
        </div>

        <hr>

        <div class="row BigBox">

            <?php
            getFruitsHomepage();
            ?>

            <hr>
        </div>
        <hr>
    </div>

    <div class="container">
        <div class="text-center">
            <!-- <h2 id="headings" class="destext">Fresh fruits</h2> -->
            <h1 id="headings" class="guard"><span><b>Fresh Fruits </b></span>
            </h1>
        </div>

        <hr>
        <div class="row BigBox">

            <?php
            getVegetablesHomepage();
            ?>

            <hr>
        </div>
        <hr>
    </div>


    <!-- product End -->




    <!-- Facts Start -->
    <div class="container-fluid bg-primary facts py-5 mb-5">
        <div class="container py-5">
            <div class="row gx-5 gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-star fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Our Experience</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-users fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Farm Specialist</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-check fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Complete Project</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-mug-hot fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Happy Clients</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <div class="container">

        <div class="text-center">
            <h1 id="headings" class="longguard"><span><b>Best Selling Products All Over India </b></span>
            </h1>
        </div>
        <br>
        <div class="row">
            <?php
            cart();
            getProducts();
            ?>
        </div>
        <br><br>


    </div>

    <!-- Testimonial Start -->
    <div class="container-fluid bg-testimonial py-5 my-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel p-5">
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto p-2 border border-5 border-secondary rounded-circle mb-4" src="img/testimonial-2.jpg" alt="">
                            <p class="fs-5">Dolores sed duo clita justo dolor et stet lorem kasd dolore lorem ipsum. At lorem lorem magna ut et, nonumy labore diam erat. Erat dolor rebum sit ipsum.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Client Name</h4>
                        </div>
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto p-2 border border-5 border-secondary rounded-circle mb-4" src="img/testimonial-2.jpg" alt="">
                            <p class="fs-5">Dolores sed duo clita justo dolor et stet lorem kasd dolore lorem ipsum. At lorem lorem magna ut et, nonumy labore diam erat. Erat dolor rebum sit ipsum.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Client Name</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="mb-3">
                        <h6 class="text-primary text-uppercase">Services</h6>
                        <h1 class="display-5">Organic Farm Services</h1>
                    </div>
                    <p class="mb-4">Tempor erat elitr at rebum at at clita. Diam dolor diam ipsum et tempor sit. Clita erat ipsum et lorem et sit sed stet labore</p>
                    <a href="" class="btn btn-primary py-md-3 px-md-5">Contact Us</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <i class="fa fa-carrot display-1 text-primary mb-3"></i>
                        <h4>Fresh Vegetables</h4>
                        <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita nonumy dolor magna dolor vero</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <i class="fa fa-apple-alt display-1 text-primary mb-3"></i>
                        <h4>Fresh Fruits</h4>
                        <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita nonumy dolor magna dolor vero</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container-fluid bg-primary feature py-5 pb-lg-0 my-5">
        <div class="container py-5 pb-lg-0">
            <div class="mx-auto text-center mb-3 pb-2" style="max-width: 500px;">
                <h6 class="text-uppercase text-secondary">Features</h6>
                <h1 class="display-5 text-white">Why Choose Us!!!</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-3">
                    <div class="text-white mb-5">
                        <div class="bg-secondary rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-seedling fs-4 text-white"></i>
                        </div>
                        <h4 class="text-white">100% Organic</h4>
                        <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita</p>
                    </div>
                    <div class="text-white">
                        <div class="bg-secondary rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-award fs-4 text-white"></i>
                        </div>
                        <h4 class="text-white">Award Winning</h4>
                        <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-block bg-white h-100 text-center p-5 pb-lg-0">
                        <p>At et justo elitr amet sea at. Magna et sit vero at ipsum sit et dolores rebum. Magna sea eos sit dolor, ipsum amet no tempor ipsum eirmod lorem eirmod diam tempor dolor eos diam et et diam dolor ea. Clita est rebum amet dolore sit. Dolor stet dolor duo clita, vero dolor ipsum amet dolore magna lorem erat stet sed vero dolor</p>
                        <img class="img-fluid" src="img/feature.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="text-white mb-5">
                        <div class="bg-secondary rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-tractor fs-4 text-white"></i>
                        </div>
                        <h4 class="text-white">Modern Farming</h4>
                        <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita</p>
                    </div>
                    <div class="text-white">
                        <div class="bg-secondary rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt fs-4 text-white"></i>
                        </div>
                        <h4 class="text-white">24/7 Support</h4>
                        <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->




    <!-- Footer Start -->
    <div class="container-fluid bg-footer bg-primary text-white mt-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <h4 class="text-white mb-4">Get In Touch</h4>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-white me-2"></i>
                                <p class="text-white mb-0">Location, City, Country</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-white me-2"></i>
                                <p class="text-white mb-0">info@example.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-white me-2"></i>
                                <p class="text-white mb-0">+012 345 67890</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-secondary btn-square rounded-circle me-2" href="https://freewebsitecode.com/"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle me-2" href="https://facebook.com/freewebsitecode/"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle me-2" href="https://freewebsitecode.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle" href="https://youtube.com/freewebsitecode/"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-white mb-4">Quick Links</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Home</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>About Us</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Our Services</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Meet The Team</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Latest Blog</a>
                                <a class="text-white" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-white mb-4">Popular Links</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Home</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>About Us</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Our Services</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Meet The Team</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Latest Blog</a>
                                <a class="text-white" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-n5">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-secondary p-5">
                        <h4 class="text-white">Newsletter</h4>
                        <h6 class="text-white">Subscribe Our Newsletter</h6>
                        <p>Amet justo diam dolor rebum lorem sit stet sea justo kasd</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                <button class="btn btn-primary">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white py-4">
        <div class="container text-center">
            <p class="mb-0">&copy; <a class="text-secondary fw-bold" href="https://freewebsitecode.com/">Your Site Name</a>. All Rights Reserved. Designed by <a class="text-secondary fw-bold" href="https://freewebsitecode.com">Free Website Code</a></p>
        </div>
    </div>
    <!-- Footer End -->

    </div>


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>