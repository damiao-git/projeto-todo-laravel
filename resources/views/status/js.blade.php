<script>
    function criarStatus(event) {
        event.preventDefault();
        var status = document.getElementById('status').value;
        var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        let dados = {
            name: status,
            _token: token
        };

        fetch("{{ route('status.store') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': token
                },
                body: JSON.stringify(dados)
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erro ao enviar dados: ' + response.statusText);
                }
                return response.json();
            })
            .then(data => {
                console.log('Resposta do servidor: ', data);
                var tabela = document.getElementById("table_status_todo").getElementsByTagName('tbody')[0];
                var novaLinha = tabela.insertRow(0);

                var colunaId = novaLinha.insertCell(0);
                colunaId.textContent = data.status.id;

                var colunaNome = novaLinha.insertCell(1);
                colunaNome.textContent = data.status.name;

                var colunaAcoes = novaLinha.insertCell(2);
                colunaAcoes.className = 'd-flex justify-content-end gap-2';
                colunaAcoes.innerHTML =
                    '<a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editStatusModal">Editar</a>' +
                    '<a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteStatusModal">Excluir</a>';

                document.getElementById("status").value = '';

                var modal = document.getElementById('createStatusModal');
                var modalInstance = bootstrap.Modal.getInstance(modal);
                modalInstance.hide();
            })
            .catch(error => {
                Swal.fire({
                    title: 'Erro ao criar status!',
                    text: 'Verifique o console para mais detalhes',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
                var modal = document.getElementById('createStatusModal');
                var modalInstance = bootstrap.Modal.getInstance(modal);
                modalInstance.hide();
            });
    }

    function abrirModalEditar(id) {
        var celula_status_id = document.getElementById("td_status_id_" + id).innerText;
        var celula_status = document.getElementById("td_status_name_" + id).innerText;

        document.getElementById("status_id_edit_").value = celula_status_id;
        document.getElementById("status_edit_").value = celula_status;
    }

    function editarStatus() {
        event.preventDefault();
        var id = document.getElementById('status_id_edit_').value;
        var status = document.getElementById('status_edit_').value;
        var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        let dados = {
            id: id,
            name: status,
            _token: token
        };

        fetch("{{ route('status.update', '') }}/" + id, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': token
            },
            body: JSON.stringify(dados)
        }).then(response => {
            if (!response.ok) {
                throw new Error('Erro ao enviar dados: ' + response.statusText);
            }
            return response.json();
        }).then(data => {
            console.log('Resposta do servidor: ', data);
            var namex = document.getElementById("td_status_name_" + id);
            namex.innerHTML = dados.name;
            Swal.fire({
                title: 'Sucesso!',
                text: 'Registro Editado',
                icon: 'success',
                timer: 3000
            });
            var modal = document.getElementById('editStatusModal');
            var modalInstance = bootstrap.Modal.getInstance(modal);
            modalInstance.hide();
        });
    }

    function excluirStatus(id) {
        Swal.fire({
            title: 'Atenção!',
            text: 'Deseja excluir status ' + id + '?',
            icon: 'warning',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (typeof(result.value) != "undefined" && result.value == true)
                var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            fetch("{{ route('status.destroy', '') }}/" + id, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': token
                    },
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Erro ao excluir dados: ' + response.statusText);
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Resposta do servidor: ', data);
                    Swal.fire({
                        title: 'Sucesso!',
                        text: 'Registro Excluido',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    })
                    var row = document.querySelector(`#table_status_todo tr[data-id="${id}"]`);
                    if (row) {
                        row.remove();
                    }
                })
                .catch(error => {
                    Swal.fire({
                        title: 'Erro ao excluir status!',
                        text: 'Verifique o console para mais detalhes',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                    var modal = document.getElementById('createStatusModal');
                    var modalInstance = bootstrap.Modal.getInstance(modal);
                    modalInstance.hide();
                });
        });
    }
</script>
