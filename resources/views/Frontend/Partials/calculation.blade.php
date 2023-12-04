<div class="w-full">
    <div class="w-1/3 flex  justify-center bg-gray-400 ml-96 mt-20 rounded-lg">
        <form action="{{route('calculator')}}" method="POST"> <br>
            @csrf
        <h2 class="pt-4 text-red-500 text-xl font-bold">Calculator</h2> <br>
           <label for="first_input">First input</label> <br>
           <input type='number' name="first_input"> <br>
           <label for="second_input">Second input</label> <br>
           <input type="number" name="second_input"> <br>
           <label for="operation">Operation</label> <br>
           <select name="operation" id="">
             <option value="+">Addition</option>
             <option value="-">Subtraction</option>
             <option value="/">Division</option>
             <option value="*">Multiplication</option>
           </select> <br><br>
           <button type="submit" class="bg-red-500 text-white rounded-md px-4 py-2 mb-3 " >Submit</button>
        </form>
    </div>
</div>

@isset($calc)
    <p class="flex justify-center w-">Result: {{ $calc }}</p>
@endisset
