<div class="block pad form large-12 medium-12 left">
    <?= $this->Form->create($order) ?>
    <fieldset>
        <legend><?= __('Pièces montées') ?></legend><br>
        <?php echo $this->Form->input('nbPiece', ['type'=>'number', 'label'=>'Nombre de pièces voulues','empty'=>'Nombre de pièces voulues','style'=>'width:150px !important;','onchange'=>'addRows(this.value);']); ?>
        <?php echo $this->Form->input('costumer', ['type'=>'text', 'label'=>'Client','empty'=>'Aucun client renseigné','style'=>'width:150px !important;','required'=>true]) ?>
        
        <table id='ordtable'></table>

       <!-- <div class="medium-5 large-4">
           <label>Taille du gâteau</label> 
           <input type="text" name="tailletotale" value="0" style="width:200px !important;">
       </div> -->

    </fieldset>
    <fieldset id="decor">
        <legend><?= __('Décor') ?></legend>        
        <?php  echo $this->Form->input('description', ['type'=>'textarea', 'label'=>'Décrivez votre Pièces Montées','empty'=>'','required'=>false]);  ?>
        <?php  echo $this->Form->input('theme', ['options'=>$theme, 'label'=>'Choisissez un thème','empty'=>'','style'=>'width:200px !important;','required'=>true]);  ?>
        
        <?php  echo $this->Form->input('couleur', ['options'=>$couleurs, 'label'=>'Vos couleurs préférées','empty'=>'Choisissez une couleur','style'=>'width:200px !important;','multiple'=>true,'required'=>true]);  ?>
        
        <?php  echo $this->Form->input('photo', ['type'=>'file', 'label'=>'Charger une photo support']);  ?>
        
        <?php  echo $this->Form->input('designer', ['type'=>'radio','label'=>'Voulez vous rencontrer nos cake designer pour affiner votre création?','options'=>['oui'=>'oui','non'=>'non'],'required'=>true]);  ?>

    </fieldset>
        <?= $this->Form->button(__('Enregistrer'),["class"=>"btn btn-primary"]) ?>
    <?= $this->Form->end() ?>
</div>

<script type="text/javascript">
    var table = document.getElementById('ordtable');
    // document.getElementById('decor').style.display ="none";
        var row;
        var header = table.insertRow(0);

        var numero = header.insertCell(0);
        var form = header.insertCell(1);
        var biscuit = header.insertCell(2);
        var entremet = header.insertCell(3);
        var taille = header.insertCell(4);

        numero.innerHTML = "<td>Numéro</td>";
        form.innerHTML = "<td>Forme</td>";
        biscuit.innerHTML = "<td>Biscuit</td>";
        entremet.innerHTML = "<td>Entremets</td>";
        taille.innerHTML = "<td>Taille</td>";

    function addRows(n){
        var nbremove = n-table.rows.length;
        if(n<table.rows.length){
            for (var i = table.rows.length-1; i >n; i--) 
                table.deleteRow(i);
             
        }else{

                for(i=table.rows.length;i<=n;i++){

                    row = table.insertRow(i)

                    numero      = row.insertCell(0);
                    form        = row.insertCell(1);
                    biscuit     = row.insertCell(2);
                    entremet    = row.insertCell(3);
                    taille      = row.insertCell(4);

                    numero.innerHTML ='<td class="medium-1">' + i + '</td>';
                    form.innerHTML = '<?php echo $this->Form->input('form',['label'=>'','empty'=>' ','options'=>$shapes,'class'=>'medium-2','required'=>true]); ?>';
                    biscuit.innerHTML = '<?php echo $this->Form->input('biscuit',['label'=>'','empty'=>' ','options'=>$biscuit,'class'=>'medium-3','onchange'=>'getEntremets(this.value,this)','required'=>true]); ?>';
                    entremet.innerHTML = '<?php echo $this->Form->input('entremet',['label'=>'','empty'=>' ','options'=>'','class'=>'medium-4','required'=>true]); ?>';
                    taille.innerHTML = '<?php echo $this->Form->input('taille',['label'=>'','empty'=>' ','options'=>$nbpers,'class'=>'medium-2','required'=>true]); ?>';
                   
                    document.getElementById('form').name ='form['+i+']'; document.getElementById('form').id ='form['+i+']';
                    document.getElementById('biscuit').name ='biscuit['+i+']'; document.getElementById('biscuit').id ='biscuit['+i+']';
                    document.getElementById('entremet').name ='entremet['+i+']'; document.getElementById('entremet').id ='entremet['+i+']';
                    document.getElementById('taille').name ='taille['+i+']'; document.getElementById('taille').id ='taille['+i+']';

                }
        }
        if(n<0) document.getElementById('decor').style.display ="none"; else  document.getElementById('decor').style.display = "block";
    }

    function getEntremets(biscuitId,obj){ 
        var pos = obj.name;
        pos = pos.substring(8,pos.length-1);
        // alert(pos); return;
        item = document.getElementById('entremet['+pos+']');
        var d;
        var table = [];
        $.get( "http://localhost/cakeaddict/entremets/listerajax", { biscuitId:biscuitId } )
            .done(function( data ) {
                // alert(data);
            d =  '{"Entremets":' + data + '}';
            // alert(d);
            data = jQuery.parseJSON(d);
            // alert(data.Entremets.length);
            // return;
             item.innerHTML = "";
            for(var i=0; i<data.Entremets.length; i++){
                item.innerHTML += "<option value=" + data.Entremets[i].id + ">"+ data.Entremets[i].name +"</option>";
            }

        });
    }
</script>