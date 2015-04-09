# Statamic gravatar

A simple statamic plugin for retrieving a gravatar url from an e-mail address.

## Usage

Rename folder to 'gravatar' and put it in your _add-ons folder, use with:

	<img src="{{ gravatar email="person@gmail.com" }}">

to retrieve the gravatar for that e-mail address.

Define the size of gravatar with:

	<img src="{{ gravatar email="person@gmail.com" size="280" }}">

As an example if you want to retrieve the gravatar for a posts author you would do:

	{{ member:profile member="{ author }" }}
		<img src="{{ gravatar email="{{ email }}" }}" >
	{{ /member:profile }}

Enjoy!
