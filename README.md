[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Gumroad/functions?utm_source=RapidAPIGitHub_GumroadFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Gumroad Package
Gumroad helps creators take control of their creative careers. The Gumroad OAuth API is based around REST. We return JSON for every request, including errors.
* Domain: gumroad.com
* Credentials: accessToken

## How to get credentials: 
1. To start using the Gumroad API, you'll need to [register as a developer](https://gumroad.com/settings#advanced).
2. Then [register your OAuth application](https://gumroad.com/settings/advanced#application-form).
3. Generate access token on your application page.
 
## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 
## Gumroad.getUserProducts
Retrieve all of the existing products for the authenticated user.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your application's access token.

## Gumroad.getSingleProduct
Retrieve the details of a product.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your application's access token.
| id         | String     | Id of the product.

## Gumroad.deleteSingleProduct
Permanently delete a product.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your application's access token.
| id         | String     | Id of the product.

## Gumroad.enableSingleProduct
Enable an existing product.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your application's access token.
| id         | String     | Id of the product.

## Gumroad.disableSingleProduct
Disable an existing product.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your application's access token.
| id         | String     | Id of the product.

## Gumroad.createProductVariantCategory
Create a new variant category on a product.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your application's access token.
| id         | String     | Id of the product.
| title      | String     | Variant category name.

## Gumroad.getProductSingleVariantCategory
Retrieve the details of a variant category of a product.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your application's access token.
| id         | String     | Id of the product.
| categoryId | String     | Variant category id.

## Gumroad.updateProductVariantCategory
Edit a variant category of an existing product.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your application's access token.
| id         | String     | Id of the product.
| categoryId | String     | Variant category id.
| title      | String     | Variant category name.

## Gumroad.deleteProductVariantCategory
Permanently delete a variant category of a product.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your application's access token.
| id         | String     | Id of the product.
| categoryId | String     | Variant category id.

## Gumroad.getProductVariantCategories
Retrieve all of the existing variant categories of a product.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your application's access token.
| id         | String     | Id of the product.

## Gumroad.createProductVariant
Create a new variant of a product.

| Field               | Type       | Description
|---------------------|------------|----------
| accessToken         | credentials| Your application's access token.
| id                  | String     | Id of the product.
| categoryId          | String     | Variant category id.
| name                | String     | Variant variant.
| priceDifferenceCents| Number     | Price difference cents.
| maxPurchaseCount    | Number     | Max purchase count.

## Gumroad.getSingleProductVariant
Retrieve the details of a variant of a product.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your application's access token.
| id         | String     | Id of the product.
| categoryId | String     | Variant category id.
| variantId  | String     | Variant id.

## Gumroad.updateProductVariant
Edit a variant of an existing product.

| Field               | Type       | Description
|---------------------|------------|----------
| accessToken         | credentials| Your application's access token.
| id                  | String     | Id of the product.
| categoryId          | String     | Variant category id.
| variantId           | String     | Variant id.
| name                | String     | Variant name.
| priceDifferenceCents| Number     | Price difference cents.
| maxPurchaseCount    | Number     | Max purchase count.

## Gumroad.deleteProductVariant
Permanently delete a variant of a product.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your application's access token.
| id         | String     | Id of the product.
| categoryId | String     | Variant category id.
| variantId  | String     | Variant id.

## Gumroad.getVariantsInVariantCategory
Retrieve all of the existing variants in a variant category.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your application's access token.
| id         | String     | Id of the product.
| categoryId | String     | Variant category id.

## Gumroad.getProductOfferCodes
Retrieve all of the existing offer codes for a product. Either amount_cents or percent_off will be returned depending if the offer code is a fixed amount off or a percentage off. A universal offer code is one that applies to all products.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your application's access token.
| id         | String     | Id of the product.

## Gumroad.getSingleProductOfferCode
Retrieve the details of a specific offer code of a product.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your application's access token.
| id         | String     | Id of the product.
| offerId    | String     | Offer code id.

## Gumroad.createProductOfferCode
Create a new offer code for a product. Default offer code is in cents. A universal offer code is one that applies to all products.

| Field           | Type       | Description
|-----------------|------------|----------
| accessToken     | credentials| Your application's access token.
| id              | String     | Id of the product.
| name            | String     | Offer name.
| amountOff       | String     | Amount value.
| offerType       | Select     | ```cents``` or ```percent```
| maxPurchaseCount| String     | Max purchase count
| universal       | Boolean    | true or false

## Gumroad.updateProductOfferCode
Edit an existing product's offer code.

| Field           | Type       | Description
|-----------------|------------|----------
| accessToken     | credentials| Your application's access token.
| id              | String     | Id of the product.
| offerId         | String     | Offer code id.
| maxPurchaseCount| String     | Max purchase count

## Gumroad.deleteProductOfferCode
Edit an existing product's offer code.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your application's access token.
| id         | String     | Id of the product.
| offerId    | String     | Offer code id.

## Gumroad.getProductCustomFields
Retrieve all of the existing custom fields for a product.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your application's access token.
| id         | String     | Id of the product.

## Gumroad.createProductCustomField
Create a new custom field for a product.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your application's access token.
| id         | String     | Id of the product.
| name       | String     | Field name.
| required   | Boolean    | true or false.

## Gumroad.updateProductCustomField
Edit an existing product's custom field.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your application's access token.
| id         | String     | Id of the product.
| name       | String     | Field name.
| required   | Boolean    | true or false.

## Gumroad.deleteProductCustomField
Edit an existing product's custom field.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your application's access token.
| id         | String     | Id of the product.
| name       | String     | Field name.

## Gumroad.getUser
Retrieve the user's data.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your application's access token.

## Gumroad.getUserSubscriptions
Show all active subscriptions for this user.

| Field       | Type       | Description
|-------------|------------|----------
| accessToken | credentials| Your application's access token.
| resourceName| String     | Currently the only supported value is ```sale```.

## Gumroad.subscribeToResource
Subscribe to a resource. Currently the only supported resource name is `sale`. Once subscribed you will be notified of the user's sales with an HTTP POST to your post_url.

| Field       | Type       | Description
|-------------|------------|----------
| accessToken | credentials| Your application's access token.
| resourceName| String     | Currently the only supported value is ```sale```.
| postUrl     | String     | URL for notifications

## Gumroad.unsubscribeFromResource
Unsubscribe from a resource.

| Field                 | Type       | Description
|-----------------------|------------|----------
| accessToken           | credentials| Your application's access token.
| resourceSubscriptionId| String     | Id of subscription resource.

## Gumroad.getUserSucessfulSales
Retrieves all of the sucessful sales by the authenticated user. Available with the ```view_sales``` scope.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your application's access token.
| after      | DatePicker | Only return sales after this date.
| before     | DatePicker | Only return sales before this date.
| page       | Number     | Return this page of results.

## Gumroad.getUserSingleSale
Retrieves the details of a sale by this user. Available with the ```view_sales``` scope.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your application's access token.
| saleId     | String     | Id of user sale.

## Gumroad.getProductActiveSubscribers
Retrieves all of the active subscribers for one of the authenticated user's products. Available with the ```view_sales``` scope.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your application's access token.
| id         | String     | Id of the product.

## Gumroad.getProductSingleSubscriber
Retrieves the details of a subscriber to this user's product. Available with the ```view_sales``` scope.

| Field       | Type       | Description
|-------------|------------|----------
| accessToken | credentials| Your application's access token.
| subscriberId| String     | Id of the subscriber.

