# End of life application

[![Build Status](https://travis-ci.com/keboola/app-end-of-life.svg?branch=master)](https://travis-ci.com/keboola/app-end-of-life)

This component is used as a placeholder when a component reached its end of life and cannot be run anymore.

# Usage

In [developer portal](https://components.keboola.com/~) edit the component which reached its end-of-life. 
Edit the component and in repository details set:

- **Image Name** to `147946154733.dkr.ecr.us-east-1.amazonaws.com/developer-portal-v2/keboola.app-end-of-life`
- **Tag** to `latest` 

Optionally, you can specify a custom `eolMessage` in **Image parameters**:

```json
{
    "eolMessage": "The 24h Acme Anvil Service has been terminated. For other options of catching the Road Runner, contact Wile E. Coyote."
}
```

## Development
 
Clone this repository and init the workspace with following command:

```
git clone https://github.com/keboola/my-component
cd my-component
docker-compose build
docker-compose run --rm dev composer install --no-scripts
```

Run the test suite using this command:

```
docker-compose run --rm dev composer tests
```
 
# Integration

For information about deployment and integration with KBC, please refer to the [deployment section of developers documentation](https://developers.keboola.com/extend/component/deployment/) 
