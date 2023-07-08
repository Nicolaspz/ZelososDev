<h2>Criar agenda</h2>
<a href="/agenda">voltar</a>
<hr>

<form action="{{ route('agenda.store') }}" method="POST">
    @csrf
    <label for="">Titile</label><br>
    <input type="text" name="title" placeholder="Ex:Viagem"><br>
    <label for="">Description</label><br>
    <textarea name="description" id="" cols="30" rows="10" placeholder="Ex:uma viagem para.."></textarea><br>
    <label for="">Data</label><br>
    <input type="date" name="date"><br><br>
    <button type="submit" >Salvar</button>
</form>
