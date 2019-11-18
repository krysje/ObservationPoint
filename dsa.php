<?php
    define('TITLE',"Data Structures & Algorithms");
    include 'header.php';

    if(!isset($_SESSION['userId']))
    {
        header("Location: index.php");
        exit();
    }
?>


<!--Main Content Between Header and Footer-->
<main>

       <section>

       <div id="main-div">

        <div id="lt-pt">
           
            <div id="side-menu">
            <div class= "lmhid"><a href= #>    
                      Data Structures & Algorithms</a></div><br>
			<div class="lmbid">DSA - Home</div><br>
			<div class="lmbid">DSA - Overview</div><br>
            <div class="lmbid">DSA - Environment Setup</div><br>

            <div class= "lmhid"><a href= #>Algorithm</a></div>  <br>
			<div class="lmbid">DSA - Algorithms Basics</div><br>
			<div class="lmbid">DSA - Aysmptotic Analysis</div><br>
            <div class="lmbid">DSA - Greedy Algorithms</div><br>
            <div class="lmbid">DSA - Divide and Conquer</div><br>
            <div class="lmbid">DSA - Dynamic Programming</div><br>

            <div class= "lmhid"><a href= #>Data Structures</a></div>  <br>
			<div class="lmbid">DSA - Data Structure Basics</div><br>
            <div class="lmbid">DSA - Array Data Structure</div><br>
            

            <div class= "lmhid"><a href= #>Data Structures</a></div>  <br>
			<div class="lmbid">DSA - Data Structure Basics</div><br>
            <div class="lmbid">DSA - Array Data Structure</div><br>
            

            <div class= "lmhid"><a href= #>Linked Lists</a></div>  <br>
			<div class="lmbid">DSA - Linked Lists Basics</div><br>
            <div class="lmbid">DSA - Doubly Linked Lists</div><br>
            <div class="lmbid">DSA - Circular Linked Lists</div><br>

        </div>
</div>




        <div id="rt-pt">
            <h2 id="title1"><b>Data Structures & Algorithms</b></h2>

            <hr>

            <p class="p4c">Algorithm is a step-by-step procedure, which defines a set of instructions 
                to be executed in a certain order to get the desired output. 
                Algorithms are generally created independent of underlying languages,
                i.e. an algorithm can be implemented in more than one programming language.
                <br><br>
              From the data structure point of view, following are some important categories of algorithms −
             </p>    

            <ul class="ul1" style="list-style-type:circle;">
                <li><strong>Search</strong> − Algorithm to search an item in a data structure.</li><br>
                <li><strong>Sort</strong>− Algorithm to sort items in a certain order.</li><br>
                <li><strong>Insert </strong>− Algorithm to insert item in a data structure.</li><br>
                <li><strong>Update</strong> − Algorithm to update an existing item in a data structure.</li><br>
                <li><strong>Delete </strong>− Algorithm to delete an existing item from a data structure.</li><br>
            </ul>
            
            <h4 class="h4c">Characteristics of an Algorithm</h4>
            <p class = "p4c">Not all procedures can be called an algorithm. An algorithm should have the following characteristics −</p>

            <ul class="ul1">
                <li><strong>Unambiguous</strong> − Algorithm should be clear and unambiguous. Each of its steps (or phases), and their inputs/outputs should be clear and must lead to only one meaning.</li><br>
                <li><strong>Input</strong> − An algorithm should have 0 or more well-defined inputs.</li><br>
                <li><strong>Output</strong> − An algorithm should have 1 or more well-defined outputs, and should match the desired output.</li><br>
                <li><strong>Finiteness </strong>− Algorithms must terminate after a finite number of steps.</li><br>
                <li><strong>Feasibility</strong> − Should be feasible with the available resources.</li><br>
                <li><strong>Independent</strong> − An algorithm should have step-by-step directions, which should be independent of any programming code.</li><br>
            </ul>

            <h4 class="h4c">How to Write an Algorithm?</h4>
            <p class="p4c">There are no well-defined standards for writing algorithms. Rather, it is problem and resource dependent. Algorithms are never written to support a particular programming code. <br>  

                As we know that all programming languages share basic code constructs like loops (do, for, while), flow-control (if-else), etc. These common constructs can be used to write an algorithm. <br>

                We write algorithms in a step-by-step manner, but it is not always the case. Algorithm writing is a process and is executed after the problem domain is well-defined. That is, we should know the problem domain, for which we are designing a solution. <br>

            <h4 class="h4c">Algorithm Analysis</h4>
                <p class="p4c">Efficiency of an algorithm can be analyzed at two different stages, before implementation and after implementation. They are the following − <br></p>
                <ul class="ul1">
                    <li><strong>A Priori Analysis </strong> −  This is a theoretical analysis of an algorithm. Efficiency of an algorithm is measured by assuming that all other factors, <br>for example, processor speed, are constant and have no effect on the implementation.</li><br>
                    <li><strong>A Posterior Analysis</strong> − This is an empirical analysis of an algorithm. The selected algorithm is implemented using programming language.<br> This is then executed on target computer machine. In this analysis, actual statistics like running time and space required, are collected.</li><br>
                </ul>

                <p class="p4c">We shall learn about a priori algorithm analysis. Algorithm analysis deals with the execution or running time of various operations involved. The running time of an operation can be defined as the number of computer instructions executed per operation.</p>


            <h4 class="h4c">Algorithm Complexity</h4>
                <p class="p4c">Suppose X is an algorithm and n is the size of input data, the time and space used by the algorithm X are the two main factors, which decide the efficiency of X. <br></p>
                <ul class="ul1">
                    <li><strong>Time Factor  </strong> −  Time is measured by counting the number of key operations such as comparisons in the sorting algorithm.</li><br>
                    <li><strong>Space Factor </strong> − Space is measured by counting the maximum memory space required by the algorithm.</li><br>
                </ul>

                 <p class="p4c">The complexity of an algorithm f(n) gives the running time and/or the storage space required by the algorithm in terms of n as the size of input data.</p>


             <h4 class="h4c">Space Complexity</h4>
                <p class="p4c">Space complexity of an algorithm represents the amount of memory space required by the algorithm in its life cycle. The space required by an algorithm is equal to the sum of the following two components − <br></p>
                <ul class="ul1">
                    <li> A fixed part that is a space required to store certain data and variables, that are independent of the size of the problem. <br> For example, simple variables and constants used, program size, etc.</li><br>
                    <li>A variable part is a space required by variables, whose size depends on the size of the problem. <br> For example, dynamic memory allocation, recursion stack space, etc.<br>
                </ul>

                 <p class="p4c">Space complexity S(P) of any algorithm P is S(P) = C + SP(I), where C is the fixed part and S(I) is the variable part of the algorithm, which depends on instance characteristic I.</p>



                 <h4 class="h4c">Time Complexity</h4>
                <p class="p4c">Time complexity of an algorithm represents the amount of time required by the algorithm to run to completion. Time requirements can be defined as a numerical function T(n), where T(n) can be measured as the number of steps, provided each step consumes constant time. <br>
                Space complexity S(P) of any algorithm P is S(P) = C + SP(I), where C is the fixed part and S(I) is the variable part of the algorithm, <br> which depends on instance characteristic I.</p>
</p>

                 






        </div>
        
        
        </div>
       </section>
        
</main>

<?php include 'footer.php'; ?>
