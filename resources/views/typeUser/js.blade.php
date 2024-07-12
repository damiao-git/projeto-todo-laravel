<script>
    function abrirModalEditar(id) {
        var celula_type_id = document.getElementById("td_type_id_" + id).innerText;
        var celula_type = document.getElementById("td_type_name_" + id).innerText;

        document.getElementById("type_id_edit_").value = celula_type_id;
        document.getElementById("type_edit_").value = celula_type;
    }

    function editarType(){
        event.preventDefault();
        var id = document.getElementById('type_id_edit_').value;
        var name = document.getElementById('type_edit_').value
    }
</script>
