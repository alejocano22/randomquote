<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{

  public static $quotes = array("The Black Knight Always Triumphs! - Monty Python",
  "Anyone who has never made a mistake has never tried anything new - Albert Einstein",
  "Never Stop Exploring - The North Face",
  "Be yourself; everyone else is already taken - Oscar Wilde",
  "So many books, so little time - Frank Zappa",
  "Be the change that you wish to see in the world - Mahatma Gandhi",
);

public static $quotes2 = array(array("The Black Knight Always Triumphs!",  "Monty Python"),
array("Anyone who has never made a mistake has never tried anything new.", "Albert Einstein"),
array("Never Stop Exploring.", "The North Face"),
array("I love you the more in that I believe you had liked me for my own sake and for nothing else.", "John Keats"),
array("But man is not made for defeat. A man can be destroyed but not defeated.", "Ernest Hemingway"),
array("When you reach the end of your rope, tie a knot in it and hang on.", "Franklin D. Roosevelt"),
array("There is nothing permanent except change.", "Heraclitus"),
array("You cannot shake hands with a clenched fist.", "Indira Gandhi"),
array("Let us sacrifice our today so that our children can have a better tomorrow.", "A. P. J. Abdul Kalam"),
array("It is better to be feared than loved, if you cannot be both.", "Niccolo Machiavelli"),
array("Do not mind anything that anyone tells you about anyone else. Judge everyone and everything for yourself.", "Henry James"),
array("Learning never exhausts the mind.", "Leonardo da Vinci"),
array("There is no charm equal to tenderness of heart.", "Jane Austen"),
array("All that we see or seem is but a dream within a dream.", "Edgar Allan Poe"),
array("Lord, make me an instrument of thy peace. Where there is hatred, let me sow love.", "Francis of Assisi"),
array("The only journey is the one within.", "Rainer Maria Rilke"),
array("Good judgment comes from experience, and a lot of that comes from bad judgment.", "Will Rogers"),
array("Think in the morning. Act in the noon. Eat in the evening. Sleep in the night.", "William Blake"),
array("Life without love is like a tree without blossoms or fruit.", "Khalil Gibran"),
array("No act of kindness, no matter how small, is ever wasted.", "Aesop"),
array("Work like you don't need the money. Love like you've never been hurt. Dance like nobody's watching.", "Satchel Paige"),
array("It is far better to be alone, than to be in bad company.", "George Washington"),
array("If you cannot do great things, do small things in a great way.", "Napoleon Hill"),
array("Independence is happiness.", "Susan B. Anthony"),
array("The supreme art of war is to subdue the enemy without fighting.", "Sun Tzu"),
array("Keep your face always toward the sunshine - and shadows will fall behind you.", "Walt Whitman"),
array("Being entirely honest with oneself is a good exercise.", "Sigmund Freud"),
array("Happiness can exist only in acceptance.", "George Orwell"),
array("Love has no age, no limit; and no death.", "John Galsworthy"),
array("You can't blame gravity for falling in love.", "Albert Einstein"),
array("Honesty is the first chapter in the book of wisdom.", "Thomas Jefferson"),
array("The journey of a thousand miles begins with one step.", "Lao Tzu"),
array("The best preparation for tomorrow is doing your best today.", "H. Jackson Brown, Jr."),
array("There are two ways of spreading light: to be the candle or the mirror that reflects it.", "Edith Wharton"),
array("Ever tried. Ever failed. No matter. Try Again. Fail again. Fail better.", "Samuel Beckett"),
array("God gave us the gift of life; it is up to us to give ourselves the gift of living well.", "Voltaire"),
array("Picture Quote - Change your life today. Don't gamble on the future, act now, without delay.", "Simone de Beauvoir"),
array("Not all those who wander are lost.", "J. R. R. Tolkien"),
array("Whoever is happy will make others happy too.", "Anne Frank"),
array("I have not failed. I've just found 10,000 ways that won't work.", "Thomas A. Edison"),
array("Tell me and I forget. Teach me and I remember. Involve me and I learn.", "Benjamin Franklin"),
array("There is nothing on this earth more to be prized than true friendship.", "Thomas Aquinas"),
array("A leader is one who knows the way, goes the way, and shows the way.", "John C. Maxwell"),
array("Very little is needed to make a happy life; it is all within yourself, in your way of thinking.", "Marcus Aurelius"),
array("There is only one happiness in this life, to love and be loved.", "George Sand"),
array("If opportunity doesn't knock, build a door.", "Milton Berle"),
array("The secret of getting ahead is getting started.","Mark Twain"),
array("Always remember that you are absolutely unique. Just like everyone else.", "Margaret Mead"),
array("Wise men speak because they have something to say; Fools because they have to say something.", "Platon"),
array("The World is my country, all mankind are my brethren, and to do good is my religion.", "Thomas Paine"),
array("Problems are not stop signs, they are guidelines.", "Robert H. Schuller"),
array("It's not what you look at that matters, it's what you see.", "Henry David Thoreau"),
array("A single rose can be my garden... a single friend, my world.", "Leo Buscaglia"),
array("Friends show their love in times of trouble, not in happiness.", "Euripides"),
array("Life is not a problem to be solved, but a reality to be experienced.", "Soren Kierkegaard"),
);

public function index()
{
  $totalQuotes = (count(Controller::$quotes));
  $randomNumber = (rand(0,($totalQuotes-1)));
  $randomQuote = Controller::$quotes[$randomNumber];
  return response()->json(['quote' => $randomQuote, 'server_ip' => gethostbyname(gethostname())]);
}

public function show()
{
  $totalQuotes = (count(Controller::$quotes2));
  $randomNumber = (rand(0,($totalQuotes-1)));
  $randomQuote = Controller::$quotes2[$randomNumber];
  $data = [];
  $data['quote'] = $randomQuote;
  return view('quotes.random')->with("data", $data);
}

public function showImage()
{
  $totalQuotes = 15;
  $randomNumber = (rand(1,($totalQuotes-1)));
  $randomUrl = "https://teis-taller2.s3.amazonaws.com/".$randomNumber.".PNG";
  $data = [];
  $data['url'] = $randomUrl;
  $data['server-ip'] = gethostbyname(gethostname());
  return view('quotes.randomImage')->with("data", $data);
}

}
