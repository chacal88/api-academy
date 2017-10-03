<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form id="form">
    <input type="text" name="name" value="Erik's bar">
    <input type="text" name="description" value="Melhor Wiski da região">
    <input type="file" name="photo" id="file">
</form>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript">

  $('#file').on('change', function () {

    let formData = new FormData();
    formData.append('name', 'Erik\'s bar');
    formData.append('description', 'Melhor Wiski da região');
    formData.append('photo', $('#file')[0].files[0]);

    let headers = {
      'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdhMmU0YTAwNmRiNTQwZDFiYmU3YjZmZjI0M2NkN2VkMTYwMmM3ZTY2MDhjZGIwZjcyZmZjM2VjZTM1ZDU2NTI5YzgxOGZjNTQ2YzNhMzczIn0.eyJhdWQiOiI1IiwianRpIjoiN2EyZTRhMDA2ZGI1NDBkMWJiZTdiNmZmMjQzY2Q3ZWQxNjAyYzdlNjYwOGNkYjBmNzJmZmMzZWNlMzVkNTY1MjljODE4ZmM1NDZjM2EzNzMiLCJpYXQiOjE1MDYzODY3MDksIm5iZiI6MTUwNjM4NjcwOSwiZXhwIjoxNTM3OTIyNzA5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.ISC30VkAuu4ftcDGHtsAcQmHcig_Eg4y728rv1v9S1L-LbunSGBJKlZHOvJh5eDPgSgwrfKXnb0d0DMY_VV_a9LnVErbOk0XfatV_3OzvcNdEy72CoeJ-PFzOav3qs8hpzPAuXJtW-0pVBYFL7rN5o9Idmz8XnSeXOKqfZOFkEsYn95yOK30C_w3A7QCQXl7L17IVZJcdr_kRQz61V2uXtmAKVDwyS9kVnQbQblJ_3S_x5hyCeEkqweyW0SbtYM6oGu1VGSBambraAXqrZQ_1EPkQzL0xoRwSbdmaUxmp2xH3RFBBD_eIuxqzsaUXM9dges-mNbYwsV1beLQQd0cjhoYzMH5iYgS9pZj75bBwtkInIqkNj-LnQe5h7HMbCq9l0pLtIkGy0d7pmbR75lzsZ5a6v3smCs1mwCB3a3UJtJSFqerMKjoujMQ2FxVzIoFFOZLdKzNRrF1MnZ0bkWr5P1zFWbVZHyFLenvHr2Yjlxu1O1DeDfjMsksQmmG0nN3kqqDxe3LhVp53uatiREw5hbn7bwyfR5TgQHaQHPoNy-eCBzx32FdYJ8IQOzwGVLp0UU7bA21QbItCvxRgM7jmeuXlaE5UKWYg0nXK7kOvYm1LN0Fhm8sAfnc0qWO-WPd1TGC01D12COS4GsN06u6Bfeef3XPwjoQ6vdJQo5paTA',
      //'content-type': 'multipart/form-data'
      'content-type': 'application/x-www-form-urlencoded'
    }

    axios.post('http://localhost:8000/api/v1/restaurants', formData, {headers: headers})
  })
</script>
</body>
</html>