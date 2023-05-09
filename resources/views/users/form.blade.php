<div class="form-group">
    <label for="name">Nome</label>
    <input type="text" id="name" name="name" value="{{ old('name', $user->name ?? '') }}" required maxlength="255">
    @error('name')
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" id="email" name="email" value="{{ old('email', $user->email ?? '') }}" required>
    @error('email')
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label for="birthday">Data de Nascimento</label>
    <input type="date" id="birthday"
           name="birthday" value="{{ old('birthday', $user->birthday ?? '') }}" required>
    @error('birthday')
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label for="password">Senha</label>
    <input type="password" id="password" name="password" required>
    @error('password')
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label for="password_confirmation">Confirme a senha</label>
    <input type="password" id="password_confirmation" name="password_confirmation" required>
</div>
<div class="form-group">
    <button type="submit">Salvar</button>
</div>
