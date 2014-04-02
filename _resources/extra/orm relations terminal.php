
jmoakley@WEB221 /c/xampp/htdocs/SynergyNetworksCenter (contacts
$ oil console
Fuel 1.7.1 - PHP 5.4.19 (cli) (Aug 21 2013 01:07:08) [WINNT]
>>> $contact = Model_Client::find('first');
>>> $contact->client->company
Parse Error - Property "client" not found for Model_Client.

>>> $contact->clients->company
Parse Error - Property "clients" not found for Model_Client.

>>> $contact->id->company
Parse Error - Trying to get property of non-object

>>> $contact->$clients->id
Parse Error - Undefined variable: clients

>>> $contact->$clients
Parse Error - Undefined variable: clients

>>> $contact->client
Parse Error - Property "client" not found for Model_Client.

>>> $contact->id
1
>>> $contact->company
HB Granite
>>> $contact = Model_Contact::find('first');
>>> $contact->client->id
Parse Error - Trying to get property of non-object

>>> $contact->client
>>> $contact->client->company
Parse Error - Trying to get property of non-object

>>> $contact->client->client
Parse Error - Trying to get property of non-object

>>> $contact->clients
Parse Error - Property "clients" not found for Model_Contact.

>>> $contact->client->id
Parse Error - Trying to get property of non-object

>>> $contact->client
>>> $contact->client_id
0
>>>
