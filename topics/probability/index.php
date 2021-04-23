 <?php 
      $root = "https://room202math.github.io/";
      $dev_root = "http://localhost/learn/room202/persistence/";
      $pagetitle = 'Topics / Probability Part 1'; 
      $pagescripts = "<!-- MathJax --> 
         <script async src='https://polyfill.io/v3/polyfill.min.js?features=es6'></script>
         <script async id='MathJax-script' src='https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js'></script>
         <script defer src='" . $dev_root . "topics/models/models.js' type='text/javascript'></script>"; 
      include("../../templates/head.php"); 
   ?>
   
   <div class="midsection">
      <h1>Probability Part 1</h1>
      
      <p>The notion of “likelihood” is intrinsic to our worldview, so I will not belabor its definition.  With this intuition we are going to construct a formal system of probability.  This will enable us to formulate odds exactly, to agree on what we mean by odds, and to construct large, complex, and powerful odds machines that can contend with models and decisions which exceed our ability to reason intuitively.</p>
      
      <p>To those who think the ratio of English to equations in my lessons is too high, rejoice, for there are many formulas here to learn; to those who fear walls of equations, simply regard equations as unusual English and read them as such. </p>
      
      <h2 class="subsection" id="sub1">Sample Spaces and Events</h2>
      <div id="sub1content">
         <p>What are the possible outcomes of a coin flip?  Are they “heads” and “tails”?  What if the coin lands on its edge?  What if a bird snatches it out of the air?  Even in situations where certain outcomes are by far the most likely, the messy universe provides infinitely many other outcomes.</p> 
         
         <p>Hence, in formulating a model of an experiment we define the outcomes that we are going to consider.  This set of outcomes is called the sample space.  </p>
         
         <p class="definition">Sample Space S \( := \) The set of all possible outcomes of some experiment.  Corresponds to the 'universe' in standard set algebra.</p>
         
         <p>Recall that the elements of a set can be pretty much anything.  So the sample space of a coin toss could be defined as \( S = \{ H, T \} \), while the outcome of an experiment to measure height could be the positive real numbers \( [0, \infty) \) , an infinite set.</p>
         
         <p>In this course and in standardized tests you will come across questions like “what are the odds of rolling an even number” or “what are the odds of drawing two queens and two hearts when choosing four cards.”  We need a systematic way to deal with these complex collections of outcomes.</p>
         
         <p>We call any collection of outcomes an event, and rely on set theory to combine and compose events.</p>
         
         <p class="definition">Event \( := \) A subset of S, \(A \subset S\).  If the outcome is in A, event A has occurred.  Hence we can assign odds to collections of outcomes consistent with our assignment of odds to individual outcomes.</p>
         
         Comprehension Q’s: 
         <ol> 
            <li>Define a reasonable sample space for the following experiments: </li>
            <ol>
               <li>Rolling two dice</li>
               <li>Measuring stellar masses</li>
               <li>Recording someone’s purchases and sales in a market</li>
            </ol>
            <li>For the sample space S = {1, 2, 3, 4, 5, 6, 7, 8, 9, 10}, describe the following events using set theory and English: </li>
            <ol>
               <li>Event A = An odd number occurs</li>
               <li>Event B = A number greater than 3 occurs</li>
               <li>Events A and B occur</li>
               <li>Events A and not(B) occur</li>
            </ol>
         </ol>
      </div>

      <h2 class="subsection" id="sub2">Probability Functions</h2>
      
      <div id="sub2content">
         <p>A probability function assigns real numbers to events in the sample space.  Put another way, it is a map or function \( P:\mathcal{P}(S) \rightarrow [0,1] \), where \( \mathcal{P}(S) \) is the collection of all possible events.  Note that this is not the same as the sample space.  If \( S = \{H, T\} \), \( \mathcal{P}(S) = \{\emptyset, \{H\}, \{T\}, \{H, T\}\} \).</p> 
         
         <p class="definition">Power set \( \mathcal{P}(S) := \) The set of all subsets of \( S \).  The order of the powerset is given by \(  |\mathcal{P}(S)| = 2^{ |S| } \).  Henceforth I will use the special character \( \mathbb{B} \) to denote \( \mathcal{P}(S) \)</p>
         
         <p>If you are surprised to meet a function involving elements which are not numbers, consider similar maps in familiar experience.  The carnival sign “you must be this tall to ride this ride” is a function from positive real numbers measuring height to the set {“Allowed”, “You shall not pass”}. The real estate market decides the sale price of a house based on its characteristics: a complicated map from a set of attributes to a real number. </p>
         
         <p>A probability function must obey the following axioms: </p>
         
         <div class="definition">
            A probability function P, with domain \( \mathbb{B} \) associated with some sample space S and range \( [0,1] \), satisfies these (Kolmogorov) axioms: 
            <ol>
               <li>\(P(A) \geq 0 \)</li>
               <li>\(P(S) = 1\)</li>
               <li>If \(A_1, A_2,... \in \mathbb{B}\) are pairwise disjoint, then \(P(\bigcup\limits_{i=1}^{\infty}A_i) = \sum\limits_{i=1}^{\infty}P(A_i)\)</li>
            </ol>
         </div>
         
         <p>We will cover the notation of the third axiom in class.  Do not let it intimidate you, the lhs is simply a shorthand for several union operations, and the rhs for several sums.  Recall from set theory that disjoint sets are those which share no elements.</p>
         
         <p class="definition"> Disjoint sets:= Sets \( A \) and \( B \) are disjoint if \( A \cap B = \emptyset \).  A collection of sets \( \{A_1, A_2, ..., A_n\} \) are mutually disjoint if any given pair of them has intersection \( \emptyset \).</p>
         
         Here are some useful identities for the probabilities of two events.  They are all derivable from the Kolmogorov Axioms.
         
         ** defns **
      </div>
      
      <h2 class="subsection" id="sub3">Assigning and Calculating Probabilities</h2>
      <div id="sub3content">
         <p>It is important to note that there are many possible probability functions which satisfy the K. axioms for a given experiment.  For example, the assignments \( (H, T) \rightarrow (\frac{1}{2}, \frac{1}{2}) \) and \( (H, T) \rightarrow (\frac{1}{4}, \frac{3}{4}) \) are both valid probability functions according to the axioms, despite the second one being a bad model for a fair coin. The business of whether a probability function models an experiment well is the domain of statistics, where we are headed soon.  For now we’re concerned with the formal treatment of probability.</p>
         
         <p>Here’s a standard method to assign valid probability functions to experiments in which the outcomes are equally likely.</p>
         
         <p class="definition">For each outcome \( \{o_1, o_2, ..., o_n\}  \) of \( S \), assign a nonnegative number \( \{x_1, x_2, ... , x_n \} \) as the probability of that outcome, with the property that the sum of x's = 1.  For any event of S, the probability is given by the sum of the probabilities of the outcomes in that event.</p>
         
         Example 1: Consider the experiment of drawing a single card from a standard 52 card deck. 
         What are the odds of selecting a card that is black (spade or club):
         
         <ol>
            <li>and odd numbered? </li>
            <li>or royal? </li>
            <li>and either greater than 2 or a spade? </li>
         </ol>
         
         <p>1)	Let event A = a black card is drawn, and event B = an odd numbered card is drawn.  Hence we are interested in finding the odds of the intersection of these events.  We assign equal probabilities to every card, hence we need only count the number of cards in this intersection and divide it by 52.</p>
         
         <p class="center_quote">(52 / 2) * (1 / 2) * (</p>
         
         
         Example 2: Consider an experiment of selecting two word phrases of the form (adjective, noun) from these lists: 
          (“greedy”, “useless”, “haughty”, “forceful”)
         (“hat”, “tirade”, “fish”) 
         For example, “greedy fish” is one outcome. 
         1.	How many elements are in the sample space? 
         2.	If the outcomes are equally likely, calculate the probability the outcome will make someone chuckle.  (For each of the n outcomes, decide whether the outcome will make someone chuckle; count the elements in this event; then find the odds of this event).
         3.	Let B = The event that the outcome includes “fish”.  What are the odds someone will chuckle, given that B occurs?
      </div>
   </div>
</body>
</html>