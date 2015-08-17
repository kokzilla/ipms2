
<form action="/registration" method="POST">
  <p>
    User name (4 characters minimum, only alphanumeric characters):
    <input data-validation="length alphanumeric" data-validation-length="min4">
  </p>
  <p>
    Year (yyyy-mm-dd):
    <input data-validation="date" data-validation-format="yyyy-mm-dd">
  </p>
  <p>
    Website:
    <input data-validation="url">
  </p>
  <p>
    <input type="submit">
  </p>
</form>

