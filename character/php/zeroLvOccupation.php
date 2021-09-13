<?php
//Zero Levo Occupation


function getOccupation()
{
	        
		$a31 = array("Alchemist", "Human", "Staff", "1d4", "Oil, 1 flask");
		$a32 = array("Animal Trainer", "Human", "Club", "1d4", "Pony");
		$a33 = array("Armourer", "Human", "Hammer (as Club)", "1d4", "Iron Helmet");
		$a34 = array("Astrologer", "Human", "Dagger", "1d4", "Spyglass");
		$a35 = array("Barber", "Human", "Razor (as Dagger)", "1d4", "Scissors (as Dagger)");
		$a36 = array("Beadle", "Human", "Staff", "1d4", "Holy Symbol");
		$a37 = array("Beekeeper", "Human", "Hammer (as club)", "1d4", "Jar of Honey");
		$a38 = array("Blacksmith", "Human", "Hammer (as Club)", "1d4", "Steel Tongs");
		$a39 = array("Butcher", "Human", "Cleaver (as axe)", "1d6", "Side of Beef");
		$a40 = array("Caravan Guard", "Human", "Short Sword", "1d6", "Linen, 1 Yard");
		// Humans 41 - 47 Cheesemaker to Ditchdigger
		$a41 = array("Cheesemaker", "Human", "Cudgel (as Staff)", "1d4", "Stinky Cheese");
		$a42 = array("Cobbler", "Human", "Awl (as Dagger)", "1d4", "Shoehorn");
		$a43 = array("Confidence Artist", "Human", "Dagger", "1d4", "Quality Cloak");
		$a44 = array("Cooper", "Human", "Crowbar (as Club)", "1d4", "Barrel");
		$a45 = array("Costermonger", "Human", "Knife (as Dagger)", "1d4", "Fruit");
		$a46 = array("Cutpurse", "Human", "Dagger", "1d4", "Small Chest");
		$a47 = array("Ditchdigger", "Human", "Shovel (as Staff)", "1d4", "Fine Dirt, 1 lbs.");
		//Humans 48 - 56 Farmer Potato to Onion
		$a48 = array("Farmer Potato", "Human", "Pitchfork (as Spear)", "1d8", "Livestock");
		$a49 = array("Farmer Wheat", "Human", "Pitchfork (as Spear)", "1d8", "Livestock");
		$a50 = array("Farmer Turnip", "Human", "Pitchfork (as Spear)", "1d8", "Livestock");
		$a51 = array("Farmer Corn", "Human", "Pitchfork (as Spear)", "1d8", "Livestock");
		$a52 = array("Farmer Rice", "Human", "Pitchfork (as Spear)", "1d8", "Livestock");
		$a53 = array("Farmer Parsnip", "Human", "Pitchfork (as Spear)", "1d8", "Livestock");
		$a54 = array("Farmer Radish", "Human", "Pitchfork (as Spear)", "1d8", "Livestock");
		$a55 = array("Farmer Rutabaga", "Human", "Pitchfork (as Spear)", "1d8", "Livestock");
		$a56 = array("Farmer Turnip", "Human", "Pitchfork (as Spear)", "1d8", "Livestock");
		// Humans 57 - 70: Fortune Teller to Jester
		// 66 - Herder
		$a57 = array("Fortune Teller", "Human", "Dagger", "1d4", "Tarot Deck");
		$a58 = array("Gambler", "Human", "Club", "1d4", "Dice");
		$a59 = array("Gong Farmer", "Human", "Trowel (as Dagger)", "1d4", "Sack of Night Soil");
		$a60 = array("Ditcher", "Human", "Shovel (as Staff)", "1d4", "Trowel (as Dagger)");
		$a61 = array("Grave Digger", "Human", "Shovel (as Staff)", "1d4", "Trowel (as Dagger)");
		$a62 = array("Guild Beggar", "Human", "Sling", "1d4", "Crutches");
		$a63 = array("Beggar", "Human", "Sling", "1d4", "Crutches");
		$a64 = array("Healer", "Human", "Club", "1d4", "Holy Water, 1 Vial");
		$a65 = array("Herbalist", "Human", "Sling", "1d4", "Herbs, 1 lbs.");
		$a66 = array("Herder", "Human", "Staff", "1d4", "Herding Dog");
		$a67 = array("Hunter", "Human", "Short Bow", "1d6", "Deer Pelt");
		$a68 = array("Huntsman", "Human", "Short Bow", "1d6", "Deer Pelt");
		$a69 = array("Indentured Servant", "Human", "Staff", "1d4", "Locket");
		$a70 = array("Jester", "Human", "Dart", "1d4", "Silk Cloths");
		// Humans 71 - 80: Jeweler to Rope Maker
		$a71 = array("Jeweler", "Human", "Dagger", "1d4", "Gem worth 20 gp");
		$a72 = array("Locksmith", "Human", "Dagger", "1d4", "Fine Tools");
		$a73 = array("Mendicant", "Human", "Club", "1d4", "Cheese Dip");
		$a74 = array("Locksmith", "Human", "Dagger", "1d4", "Fine Tools");
		$a75 = array("Merchant", "Human", "Dagger", "1d4", "");
		$a76 = array("Miller/Baker", "Human", "Club", "1d4", "Flour, 1 lbs.");
		$a77 = array("Minstrel", "Human", "Dagger", "1d4", "Ukulele");
		$a78 = array("Noble", "Human", "Longsword", "1d8", "Gold Ring worth 10 gp");
		$a79 = array("Orphan", "Human", "Club", "1d4", "Rag Doll");
		$a80 = array("Ostler", "Human", "Staff", "1d4", "Bridle");
		$a81 = array("Rope Maker", "Human", "Knife (as Dagger)", "1d4", "Rope, 100'");
		// 81 - 90: Scribe to Urchin
		$a82 = array("Scribe", "Human", "Dart", "1d4", "Parchment, 10 sheets");
		$a83 = array("Shaman", "Human", "Mace", "1d6", "Herbs, 1 lbs.");
		$a84 = array("Slave", "Human", "Club", "1d4", "Strange-looking Rock");
		$a85 = array("Smuggler", "Human", "Sling", "1d4", "Waterproof Sack");
		$a86 = array("Squire", "Human", "Longsword", "1d8", "Steel Helmet");
		$a87 = array("Herald", "Human", "Longsword", "1d8", "Steel Helmet");
		$a88 = array("Tax Collector", "Human", "Longsword", "1d8", "");
		$a89 = array("Trapper", "Human", "Sling", "1d4", "Badger Pelt");
		$a90 = array("Molecatcher", "Human", "Sling", "1d4", "Mole Pelt");
		$a91 = array("Urchin", "Human", "Stick (as Club)", "1d4", "Begging Bowl");
		//92 - 96: Wainwright to Wood Seller
		// Humans 92 -  Wainwright
		$a92 = array("Wainwright", "Human", "Club", "1d4", "Push Cart");
		$a93 = array("Weaver", "Human", "Dagger", "1d4", "Fine Suit of Clothes");
		$a94 = array("Wizard's Apprentice", "Human", "Dagger", "1d4", "Black Grimoire");
		$a95 = array("Woodcutter", "Human", "Hand Axe", "1d6", "Bundle of Wood");
		$a96 = array("Woodmonger", "Human", "Hand Axe", "1d6", "Bundle of Wood");
		$a97 = array("Wood Seller", "Human", "Hand Axe", "1d6", "Bundle of Wood");
		// Humans 97 - 99: Mercenary to 
		$a98 = array("Mercenary", "Human", "Longsword", "1d8", "");
		$a99 = array("Outlaw", "Human", "Short Sword", "1d6", "");
		$a100 = array("Soldier", "Human", "Spear", "1d8", "");
	

        $array1 = array($a31, $a32, $a33, $a34, $a35, $a36, $a37, $a38, $a39, $a40, $a41, $a42, $a43, $a44, $a45, $a46, $a47, $a48, $a49, $a50, $a51, $a52, $a53, $a54, $a55, $a56, $a57, $a58, $a59, $a60, $a61, $a62, $a63, $a64, $a65, $a66, $a67, $a68, $a69, $a70, $a71, $a72, $a73, $a74, $a75, $a76, $a77, $a78, $a79, $a80, $a81, $a82, $a83, $a84, $a85, $a86, $a87, $a88, $a89, $a90, $a91, $a92, $a93, $a94, $a95, $a96, $a97, $a98, $a99, $a100);

        shuffle($array1);
        
        return $array1[0];
        
}

function tradeGoodsAddition($occupation, $weapon)
{
	if($weapon === "Pitchfork (as Spear)")
	{
		$animalArray = array(" (sheep)", " (goat)", " (cow)", " (duck)", " (goose)", " (mule)");
		shuffle($animalArray);
		return $animalArray[0];
	}
	else if($occupation === "Wainwright")
	{
		$cartArray = array(" containing tomatoes", " containing nothing", " containing straw", " containing your dead", " containing dirt", " containing rocks");
		shuffle($cartArray);
		return $cartArray[0];
	}
	else if($occupation === "Mercenary")
	{
		return "Hide Armour";
	}
	else if($occupation === "Outlaw")
	{
		return "Leather Armour";
	}
	else if($occupation === "Soldier")
	{
		return "Shield";
	}
	else
	{
		return "";
	}


}


?>