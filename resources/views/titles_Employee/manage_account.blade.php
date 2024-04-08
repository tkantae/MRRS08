@extends('layout.Employee')

@section('title', 'User Account Management')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>User Account Management</title>

                    <form   action="{{ route('titles_Employee.destroy-user' , $user->id) }}" method="post" style="display: inline;">
                        <a href="{{route('titles_Employee.edit_user',$user->id)}}" method="post"class="btn btn-warning">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"> Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
</body>
</html>


>>>>>>> Stashed changes
@endsection

