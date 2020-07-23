// this two var containe services inside html <p></p>
let serv_less = `<p><i class="far fa-check-circle mr-3"></i>Prompt submission of information to port authorities, customers and all other involved parties;</p>
<p><i class="far fa-check-circle mr-3"></i>Establishment of the pro-forma disbursements account covering port dues, expenses and services fees (pro-forma D/A);</p>
<p><i class="far fa-check-circle mr-3"></i>Timely reservation of available berths;</p>
<p><i class="far fa-check-circle mr-3"></i>Ordering of pilot/tugs and organization of immigration and customs clearance;</p>
<p><i class="far fa-check-circle mr-3"></i>Providing performance of arrival and departure formalities;</p>
<p><i class="far fa-check-circle mr-3"></i>Compilation and issuing of documents, bills of lading, cargo plans and manifests;</p>`

let serv_more = `<p><i class="far fa-check-circle mr-3"></i>Prompt submission of information to port authorities, customers and all other involved parties;</p>
<p><i class="far fa-check-circle mr-3"></i>Establishment of the pro-forma disbursements account covering port dues, expenses and services fees (pro-forma D/A);</p>
<p><i class="far fa-check-circle mr-3"></i>Timely reservation of available berths;</p>
<p><i class="far fa-check-circle mr-3"></i>Ordering of pilot/tugs and organization of immigration and customs clearance;</p>
<p><i class="far fa-check-circle mr-3"></i>Providing performance of arrival and departure formalities;</p>
<p><i class="far fa-check-circle mr-3"></i>Compilation and issuing of documents, bills of lading, cargo plans and manifests;</p>
<p><i class="far fa-check-circle mr-3"></i>Assisting crew in negotiations with the port administration, stevedoring companies and other suppliers of port services;</p>
<p><i class="far fa-check-circle mr-3"></i>Organization and supervision of loading and discharging process;</p>
<p><i class="far fa-check-circle mr-3"></i>Placement of orders for supplies and fuel;</p>
<p><i class="far fa-check-circle mr-3"></i>Placement of orders for repair work on board and supervision of such on behalf of ship owners;</p>
<p><i class="far fa-check-circle mr-3"></i>Assistance in legal proceedings on behalf of ship’s owners or her captain within arbitral or judicial authorities of the State to ensure efficient protection of the principal; </p>
<p><i class="far fa-check-circle mr-3"></i>Representation of the principal’s interests when solving disputes and performance of other tasks requested by the ship owner in connection with the vessel’s stay in the port;</p>
<p><i class="far fa-check-circle mr-3"></i>Crew handling – meet & greet, hotel bookings, shore pass arrangements; </p>
<p><i class="far fa-check-circle mr-3"></i>Spares clearance and delivery;</p>
<p><i class="far fa-check-circle mr-3"></i>Inward & outward clearance;</p>
<p><i class="far fa-check-circle mr-3"></i>Liaison with local authorities;</p>
<p><i class="far fa-check-circle mr-3"></i>Follow-up activities with workshops, contractors;</p>
<p><i class="far fa-check-circle mr-3"></i>Communication assistance;</p>`

let wish_one = 0;
let services = document.getElementById("servs");
// this function controle show all services or hide some of them
function show_serv() {
    if(wish_one == 0){

        services.innerHTML = serv_more;
        wish_one++;
        document.getElementById("btn").innerText = 'Show less'
    }else if(wish_one == 1){
        services.innerHTML = serv_less;
        wish_one--;
        document.getElementById("btn").innerText = 'Show more'

    }
}