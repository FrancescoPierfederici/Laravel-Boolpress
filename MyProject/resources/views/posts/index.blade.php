<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
      <thead>
        <tr>
          <th>title</th>
          <th>description</th>
        </tr>
      </thead>
    
      <tbody>
      @foreach($posts as $post )
        <tr>
          <td>{{$post->title}}</td>
          <td>{{$post->content}}<td>
            
          <td>
            <a href="{{ route('posts.show', $post->id) }}">More</a>
            <td> 
          {{-- <td><a href="{{ route('posts.edit', $post->id) }}">Edit</a><td>  --}}
        
          <td>

            {{-- <form action="{{ route('posts.destroy', $post->id) }}" method="post" class="deleteForm">
              @csrf
            
              @method('DELETE')
            
              <input type="submit" value="Delete"> 
            </form> --}}
          <td>
        </tr>

      @endforeach
      </tbody>
    
    </table>
    <br>

</body>
</html>