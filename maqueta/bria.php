<?php
if ($_SERVER['REQUEST_METHOD']==='OPTIONS') {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type');
    exit;
}
if ($_SERVER['REQUEST_METHOD']==='POST') {
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    define('API_KEY','JDJ5JDEwJDZ5Y3U5V0RDNUJBT2E2SkhsZjlSVS5BR3YwTVR1L2dnRWxTT1hRdHJVUmhWQmZzQnp5OG1p');
    define('SECRET_KEY','JDJ5JDEwJFFyT0JLVi5QR2xXRFpvOW9HZUZrT08xNzR6N3ozdlBlLnZBcklXLllsZzkuc25TYW9NUlMy');
    define('API_HOST','https://sandbox.factura.com/api');
    class API {
        private $key,$secret,$host;
        function __construct(){
            $this->key=API_KEY;
            $this->secret=SECRET_KEY;
            $this->host=API_HOST;
        }
        function generarId(){
            $d=random_bytes(16);
            $d[6]=chr(ord($d[6])&0x0f|0x40);
            $d[8]=chr(ord($d[8])&0x3f|0x80);
            $u=vsprintf('%s%s-%s-%s-%s-%s%s%s',str_split(bin2hex($d),4));
            return 'CCC'.strtoupper(substr(md5(uniqid()),0,5)).'-'.strtoupper(substr($u,8));
        }
        function timbrar($data){
            $c=curl_init();
            curl_setopt_array($c,[
                CURLOPT_URL=>"$this->host/v4/cfdi40/create",
                CURLOPT_RETURNTRANSFER=>true,
                CURLOPT_CUSTOMREQUEST=>'POST',
                CURLOPT_POSTFIELDS=>json_encode($data),
                CURLOPT_HTTPHEADER=>[
                    'Content-Type: application/json',
                    'F-PLUGIN: 9d4095c8f7ed5785cb14c0e3b033eeb8252416ed',
                    "F-Api-Key: $this->key",
                    "F-Secret-Key: $this->secret"
                ]
            ]);
            $r=curl_exec($c);
            $e=curl_error($c);
            $h=curl_getinfo($c,CURLINFO_HTTP_CODE);
            curl_close($c);
            if($e) return ['success'=>false,'error'=>"Conexión: $e"];
            return ['success'=>($h===200),'http_code'=>$h,'data'=>json_decode($r,true)];
        }
    }
    $in=json_decode(file_get_contents('php://input'),true);
    if(!$in) { echo json_encode(['success'=>false,'error'=>'JSON inválido']); exit; }
    $api=new API;
    if(($op=$in['operacion']??'crear')==='generar_id') {
        echo json_encode(['success'=>true,'idCCP'=>$api->generarId()]);
    } else {
        $data=$in['data']?:[];
        if(empty($data['idCCP'])) $data['idCCP']=$api->generarId();
        $cfdi=[
            "Receptor"=>["UID"=>$data['receptorUID']??""],
            "TipoDocumento"=>$data['tipoDocumento']??'carta_porte',
            "UsoCFDI"=>$data['usoCFDI']??'S01',
            "Redondeo"=>"2",
            "FormaPago"=>$data['formaPago']??'99',
            "MetodoPago"=>$data['metodoPago']??'PPD',
            "Moneda"=>$data['moneda']??'MXN',
            "Serie"=>$data['serie']??'',
            "Conceptos"=>$data['conceptos']??[[
                "ClaveProdServ"=>"78101800","Cantidad"=>"1.00","ClaveUnidad"=>"E48",
                "Unidad"=>"Unidad de servicio","Descripcion"=>$data['servicioDescripcion']??'',
                "ValorUnitario"=>$data['valorServicio']??'0.00',"Importe"=>$data['valorServicio']??'0.00'
            ]],
            "CartaPorte"=>[
                "Version"=>"3.1","IdCCP"=>$data['idCCP'],"TranspInternac"=>$data['transpInternac']??'No',
                "Ubicaciones"=>$data['ubicaciones']??[], "Mercancias"=>$data['mercancias']??[]
            ]
        ];
        echo json_encode($api->timbrar($cfdi));
    }
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Generador Carta Porte v3.1</title>
<style>
:root{--p:#fd5f44;--s:#16a34a;--e:#dc2626;--i:#1e40af;}
*{box-sizing:border-box;}
body{margin:0;padding:1rem;font-family:Poppins,sans-serif;background:#f9fafb;}
.container{max-width:900px;margin:0 auto;background:#fff;padding:1.5rem;border-radius:8px;box-shadow:0 4px 12px rgba(0,0,0,.1);}
h1{margin-top:0;}
.form-group{margin-bottom:1rem;}
.form-group label{display:block;font-weight:600;color:#374151;margin-bottom:.3rem;}
.form-group input,.form-group select{width:100%;padding:.5rem;border:1px solid #d1d5db;border-radius:4px;transition:.2s;}
.form-group input:focus,.form-group select:focus{outline:none;border-color:var(--p);box-shadow:0 0 0 3px rgba(253,95,68,.2);}
.grid{display:grid;grid-template-columns:1fr 1fr;gap:1rem;}
.btn{padding:.6rem 1.2rem;border:none;border-radius:4px;font-size:.95rem;cursor:pointer;transition:.2s;margin-right:.5rem;}
.btn-primary{background:var(--p);color:#fff;}
.btn-primary:disabled{opacity:.6;cursor:not-allowed;}
.btn-secondary{background:#f3f4f6;color:#374151;}
.btn-secondary:hover{background:#e5e7eb;}
.alert{padding:.75rem 1rem;border-radius:4px;margin-bottom:1rem;display:flex;justify-content:space-between;align-items:center;}
.alert-success{background:#d1fae5;color:#065f46;}
.alert-error{background:#fee2e2;color:#991b1b;}
.alert-info{background:#dbeafe;color:#1e40af;}
@media(max-width:600px){.grid{grid-template-columns:1fr;}}
</style>
</head>
<body>
<div class="container">
  <h1>🚛 Generador Carta Porte v3.1</h1>
  <div id="alert"></div>
  <form id="form">
    <fieldset><legend>Generales</legend>
      <div class="grid">
        <div class="form-group"><label>Tipo Documento</label>
          <select name="tipoDocumento" required>
            <option value="carta_porte">Traslado</option>
            <option value="carta_porte_ingreso">Ingreso</option>
          </select>
        </div>
        <div class="form-group"><label>Serie</label>
          <input type="text" name="serie" placeholder="Ej: CP001" required>
        </div>
      </div>
      <div class="grid">
        <div class="form-group"><label>Receptor UID</label>
          <input type="text" name="receptorUID" required>
        </div>
        <div class="form-group"><label>Uso CFDI</label>
          <select name="usoCFDI">
            <option value="S01">Sin efectos fiscales</option>
            <option value="G01">Adquisición de mercancías</option>
            <option value="G02">Devoluciones</option>
          </select>
        </div>
      </div>
      <div class="grid">
        <div class="form-group"><label>ID Carta Porte</label>
          <input type="text" id="idCCP" readonly>
        </div>
        <div class="form-group" style="align-self:end;">
          <button type="button" id="btnId" class="btn btn-secondary">🔄 Nuevo ID</button>
        </div>
      </div>
      <div class="form-group"><label>¿Transp. Internacional?</label>
        <select name="transpInternac" id="transp" required>
          <option value="No">No</option><option value="Sí">Sí</option>
        </select>
      </div>
    </fieldset>

    <fieldset><legend>Ubicaciones</legend>
      <h4>Origen</h4>
      <div class="grid">
        <div class="form-group"><label>RFC</label><input type="text" name="origen[rfc]" required></div>
        <div class="form-group"><label>Nombre</label><input type="text" name="origen[nombre]"></div>
      </div>
      <div class="grid">
        <div class="form-group"><label>Fecha/Hora Salida</label><input type="datetime-local" name="origen[fechaHora]" id="oFecha" required></div>
        <div class="form-group"><label>ID Ubicación</label><input type="text" name="origen[idUbicacion]" id="oId" pattern="OR[0-9]{6}"></div>
      </div>
      <h4>Destino</h4>
      <div class="grid">
        <div class="form-group"><label>RFC</label><input type="text" name="destino[rfc]" required></div>
        <div class="form-group"><label>Nombre</label><input type="text" name="destino[nombre]"></div>
      </div>
      <div class="grid">
        <div class="form-group"><label>Fecha/Hora Llegada</label><input type="datetime-local" name="destino[fechaHora]" id="dFecha" required></div>
        <div class="form-group"><label>ID Ubicación</label><input type="text" name="destino[idUbicacion]" id="dId" pattern="DE[0-9]{6}"></div>
      </div>
      <div class="form-group"><label>Distancia (km)</label><input type="number" name="destino[distanciaRecorrida]" min="0"></div>
    </fieldset>

    <fieldset><legend>Mercancías</legend>
      <div class="grid">
        <div class="form-group"><label>Peso Bruto Total (kg)</label><input type="number" step="0.01" name="mercancias[pesoBrutoTotal]" required></div>
        <div class="form-group"><label>Unidad de Peso</label>
          <select name="mercancias[unidadPeso]"><option value="KGM">KGM</option><option value="GRM">GRM</option><option value="TNE">TNE</option></select>
        </div>
      </div>
      <div class="grid">
        <div class="form-group"><label>Número Total</label><input type="number" id="totalM" name="mercancias[numTotalMercancias]" min="1" value="1" required></div>
        <div class="form-group" style="align-self:end;"><button type="button" id="addM" class="btn btn-secondary">➕ Agregar</button></div>
      </div>
      <div id="listaM">
        <div class="merc" data-i="0">
          <h5>Mercancía #1</h5>
          <div class="grid">
            <div class="form-group"><label>Clave Prod</label><input name="mercancias[items][0][bienesTransp]" required></div>
            <div class="form-group"><label>Clave Unidad</label><input name="mercancias[items][0][claveUnidad]" required></div>
          </div>
          <div class="form-group"><label>Descripción</label><input name="mercancias[items][0][descripcion]" required></div>
          <div class="grid">
            <div class="form-group"><label>Cantidad</label><input type="number" step="0.01" name="mercancias[items][0][cantidad]" required></div>
            <div class="form-group"><label>Peso (kg)</label><input type="number" step="0.01" name="mercancias[items][0][pesoEnKg]" required></div>
          </div>
          <div class="grid">
            <div class="form-group"><label>ID Origen</label><input name="mercancias[items][0][cantidadTransporta][0][IDOrigen]"></div>
            <div class="form-group"><label>ID Destino</label><input name="mercancias[items][0][cantidadTransporta][0][IDDestino]"></div>
          </div>
        </div>
      </div>
    </fieldset>

    <fieldset><legend>Transporte</legend>
      <div class="grid">
        <div class="form-group"><label>Permiso SCT</label><input name="autotransporte[PermSCT]"></div>
        <div class="form-group"><label>Núm Permiso</label><input name="autotransporte[NumPermisoSCT]"></div>
      </div>
      <div class="grid">
        <div class="form-group"><label>Config Vehicular</label><input name="autotransporte[IdentificacionVehicular][ConfigVehicular]"></div>
        <div class="form-group"><label>Placa VM</label><input name="autotransporte[IdentificacionVehicular][PlacaVM]"></div>
      </div>
      <div class="grid">
        <div class="form-group"><label>Año Modelo</label><input type="number" name="autotransporte[IdentificacionVehicular][AnioModeloVM]"></div>
        <div class="form-group"><label>Peso Veh (ton)</label><input type="number" step="0.01" name="autotransporte[IdentificacionVehicular][PesoBrutoVehicular]"></div>
      </div>
      <div class="grid">
        <div class="form-group"><label>Aseg Resp Civil</label><input name="autotransporte[Seguros][AseguraRespCivil]"></div>
        <div class="form-group"><label>Póliza Resp Civil</label><input name="autotransporte[Seguros][PolizaRespCivil]"></div>
      </div>
    </fieldset>

    <div style="text-align:center;margin-top:1rem;">
      <button type="submit" class="btn btn-primary" id="gen"><span>🚀 Generar</span></button>
      <button type="button" class="btn btn-secondary" id="save">💾 Guardar borrador</button>
      <button type="button" class="btn btn-secondary" id="load">📁 Cargar borrador</button>
      <button type="button" class="btn btn-secondary" id="clear">🗑️ Limpiar</button>
    </div>
  </form>
</div>

<script>
const apiURL=location.pathname.split('/').pop();
const alertBox=document.getElementById('alert');
function show(msg,type='info'){
  alertBox.innerHTML=`<div class="alert alert-${type}">${msg}<button onclick="this.parentNode.remove()">×</button></div>`;
  if(type!=='error') setTimeout(()=>alertBox.innerHTML='',4000);
}
async function genId(){
  try{
    const r=await fetch(apiURL,{method:'POST',headers:{'Content-Type':'application/json'},body:JSON.stringify({operacion:'generar_id'})});
    const j=await r.json();
    if(j.success) { document.getElementById('idCCP').value=j.idCCP; show('ID generado','success'); }
    else show('Error ID','error');
  }catch{show('Conexión','error');}
}
function setDates(){
  const now=new Date(),off=now.getTimezoneOffset()*60000;
  const iso=d=>new Date(d-off).toISOString().slice(0,16);
  document.getElementById('oFecha').value=iso(now);
  document.getElementById('dFecha').value=iso(new Date(now.getTime()+2*3600000));
}
function autoIds(){
  const o=document.getElementById('oId').value,d=document.getElementById('dId').value;
  document.querySelectorAll('.merc').forEach(m=>{
    const io=m.querySelector('input[name*="[IDOrigen]"]'),
          id=m.querySelector('input[name*="[IDDestino]"]');
    if(o&&io&&!io.value) io.value=o;
    if(d&&id&&!id.value) id.value=d;
  });
}
let mc=1;
document.getElementById('addM').onclick=()=>{
  const i=mc++;
  const html=document.querySelector('.merc').outerHTML
    .replace(/\[0\]/g,'['+i+']')
    .replace(/#1/g,'#'+(i+1))
    .replace(/data-i="0"/,'data-i="'+i+'"');
  document.getElementById('listaM').insertAdjacentHTML('beforeend',html);
  document.getElementById('totalM').value=mc;
  autoIds();
  show('Añadida','success');
};
function collect(){
  const f=new FormData(document.getElementById('form')),o={};
  for(let [k,v] of f) {
    const ks=k.replace(/\[(\w+)\]/g,'.$1').split('.');
    let c=o;
    ks.forEach((k2,i)=>{ if(i===ks.length-1) c[k2]=v; else c[k2]=c[k2]||{}; c=c[k2]; });
  }
  return o;
}
async function submit(e){
  e.preventDefault();
  const data=collect();
  try{
    const r=await fetch(apiURL,{method:'POST',headers:{'Content-Type':'application/json'},body:JSON.stringify({operacion:'crear',data})});
    const j=await r.json();
    if(j.success) show('✅ Generada','success');
    else show('❌ '+j.error,'error');
  }catch{show('Conexión','error');}
}
document.getElementById('btnId').onclick=genId;
document.getElementById('form').onsubmit=submit;
document.getElementById('oId').onblur=autoIds;
document.getElementById('dId').onblur=autoIds;
document.getElementById('save').onclick=()=>localStorage.setItem('cpDraft',JSON.stringify(collect())),show('Guardado','success');
document.getElementById('load').onclick=()=>{
  const d=localStorage.getItem('cpDraft');
  if(!d){show('No hay borrador','info');return;}
  const o=JSON.parse(d);
  for(let k in o) if(document.querySelector(`[name="${k}"]`)) document.querySelector(`[name="${k}"]`).value=o[k];
  show('Cargado','success');
};
document.getElementById('clear').onclick=()=>{
  document.getElementById('form').reset(); genId(); setDates(); show('Limpiado','info');
};
window.onload=()=>{ genId(); setDates(); };
</script>
</body>
</html>
