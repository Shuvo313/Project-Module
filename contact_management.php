<?php
$contacts = [];

function addContact(array &$contacts, string $name, string $email, $phone): void
{
    $contacts[] = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone
    ];
}

function displayContacts(array $contacts): void
{
    if (empty($contacts)) {
        echo "No contacts available.\n";
    } else {
        echo "----- Contact List -----\n";
        foreach ($contacts as $index => $contact) {
            echo "Contact #" . ($index + 1) . ":\n";
            echo "Name : {$contact['name']}\n";
            echo "Email: {$contact['email']}\n";
            echo "Phone: {$contact['phone']}\n";
            echo "------------------------\n";
        }
    }
}

while (true) {
    echo "\nContact Management App:\n";
    echo "1. Add Contact\n";
    echo "2. View Contacts\n";
    echo "3. Exit\n";

    $choice = (int) readline("Choose an option: ");

    if ($choice === 1) {
        $name = readline("Enter name: ");
        $email = readline("Enter email: ");
        $phone = readline("Enter phone number: ");
        
        addContact($contacts, $name, $email, $phone);
        echo "Contact added successfully!\n";
    } elseif ($choice === 2) {
        displayContacts($contacts);
    } elseif ($choice === 3) {
        echo "Exiting the application. Goodbye!\n";
        break;
    } else {
        echo "Invalid choice. Please try again.\n";
    }
}
?>
