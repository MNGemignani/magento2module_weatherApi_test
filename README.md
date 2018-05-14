# Magento 2 Module- Weather API implementation

This is a simple module in magento 2, I used to learn more about the features of magento 2 modules and working with Api inside magento2.

## Installation:

### Manual:

1. Clone the repository or download zip and add to `<your-magento2-root-directory>/app/code/Mateus/Novo`

2. Enable module

        bin/magento module:enable Mateus_Novo
    
3. Register module
  
        bin/magento setup:upgrade
    
4. Go to https://openweathermap.org/api and get your Api keys

5. Change it in `Mateus/Novo/Model/Weather.php` (`<YOUR API KEY HERE>`)

6. Change the city for your desired city (London as default) in `Mateus/Novo/Model/Weather.php`
    
### Via composer

1. Update `composer.json` at the root of your Magento 2 directory:

    a. Add to the `repositories` array:

        {
            "type": "vcs",
            "url":  "git@github.com:MNGemignani/magento2module_weatherApi_test.git"
         }

    b. Add the following to the `require` object:

        "mateus/novo": "dev-master"
        
2. Fetch the module:

        composer update mateus/novo

3. Register the module:

        bin/magento setup:upgrade

4. Verify the module is installed:

        bin/magento module:status

## Information:

Please do not expect any help or bug fixing from me, this is only a trial module for learning proposes. I'm always open for tips or improvements in my code.
