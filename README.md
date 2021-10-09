# Web Project - Dad Joke Shopping Website
This project was made for the course HTTP5203 - XML and Web Services

## API
- Reddit API
- Stripe API
- Cloud Text-to-speech API

## Descrption
At the index page, you can see a list of dad jokes. I used the reddit api to
access the dad joke subreddit to obtain the post list. Once you click on the selected
joke, it would redirect you to the joke post payment page. I used the stripe payment api
to create a checkout session that is based on the selected post information from the reddit api.
Please select the alipay when you are redirected to the payment checkout page. After the
payment has been successfully completed, you wil be redirected to a payment success page.
In this page, the joke that you have purchased will be converted into a mp3 file. You have the
option to download this mp3 file. I used the cloud text-to-speech api to convert the post into
a mp3 file.