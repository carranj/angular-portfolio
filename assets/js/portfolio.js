// Angular Sortable
(function(){
  'use strict'
  angular.module('portfolio', ['ngMaterial']); //initialize module

  //can reference model instead of creating a global variable
  angular.module('portfolio').controller('angularController', 
                                           ['$scope','ProductDataService', function($scope, ProductDataService) { 
    var products = ProductDataService.getSampleData();
    $scope.Projects = products; //use $scope to expose to the view

    //create checkbox filters on the fly with dynamic data
    var filters = [];
    _.each(products, function(product) {
      _.each(product.properties, function(property) {      
        var existingFilter = _.findWhere(filters, { name: property.name });

        if (existingFilter) {
          var existingOption = _.findWhere(existingFilter.options, { value: property.value });
          if (existingOption) {
            existingOption.count += 1;
          } else {
            existingFilter.options.push({ value: property.value, count: 1 }); 
          }   
        } else {
          var filter = {};
          filter.name = property.name;
          filter.options = [];
          filter.options.push({ value: property.value, count: 1 });
          filters.push(filter);      
        }   
      });
    });
    $scope.Filters = filters;

    this.toggleAll = function($event, includeAll) {       
      _.each(filters, function(filterCategory) {      
        _.each(filterCategory.options, function(option) {
          option.IsIncluded = includeAll;
        });
      });    
    };
  }]);

  angular.module('portfolio').filter('dynamicFilter', function () {
    return function (products, filterCategories, scope) {
      var filtered = [];

      var productFilters = _.filter(filterCategories, function(fc) {
        return  _.any(fc.options, { 'IsIncluded': true });
      });

      _.each(products, function(prod) {
        var includeProduct = true;
        _.each(productFilters, function(filter) {
          var props = _.filter(prod.properties, { 'name': filter.name });
          if (!_.any(props, function(prop) { return _.any(filter.options, { 'value': prop.value, 'IsIncluded': true }); })) {
            includeProduct = false;
          }
        });
        if (includeProduct) {
          filtered.push(prod);
        }
      });
      return filtered;
    };
  });

  angular.module('portfolio').service('ProductDataService', function() {
    var service = {};

    //sample data
    var products = [
      {   
        name: 'RoboFalcons',
        featured: false,
        imageLocation:'projects/robofalcons/robofalcon-logo.jpg',
        class:'public',
        url:'projects/robofalcons',
        description:'This custom logo was built using Adobe Illustrator and photoshop. It is a vector based image.',
        properties: [
          { name:'Project Type', value:'Graphic Design' },
          { name:'Skills', value:'Vector Artwork' }, 
          { name:'Contribution', value:'Individual' },
          { name:'Software / Libraries', value:'Photoshop'},
          { name:'Software / Libraries', value:'Illustrator'},

          
        ]
      },{
      name: 'Arthritis Foundation',
      featured: false,
      imageLocation:'projects/arthritis_foundation/houston-bone-bash.jpg',
      class:'public',
      url:'projects/arthritis_foundation',
      description:'Arthritis Foundation projects included branding and eCommerce solutions',
        properties: [
          { name:'Project Type', value:'Website' },
          { name:'Project Type', value:'Graphic Design' },
          { name:'Project Type', value:'Marketing Strategy' },
          { name:'Skills', value:'HTML' },
          { name:'Skills', value:'CSS' },
          { name:'Skills', value:'Nonprofit' }, 
          { name:'Contribution', value:'Individual' },
          { name:'Software / Libraries', value:'No Libraries' }
        ]
      },{
        name:'Crossfit Achieve',
        featured: true,
        imageLocation:'projects/crossfitachieve/crossfitachieve.jpg',
        class:'public',
        url:'projects/crossfitachieve',
        description:'CrossFit Achieve is a fully responsive WordPress website.',
        properties: [
          { name:'Project Type', value:'Website' },
          { name:'Skills', value:'HTML' },
          { name:'Skills', value:'CSS' },
          { name:'Skills', value:'Vanilla JS' },
          { name:'Skills', value:'jQuery' }, 
          { name:'Contribution', value:'Team' },
          { name:'Software / Libraries', value:'WordPress' }
        ]
      },{
        name:'Maintenance Solutions',
        featured: false,
        imageLocation:'projects/maintenance_solutions/maintenance_solutions.jpg',
        class:'public',
        url:'projects/maintenance_solutions',
        description:'Maintenance Solutions is a fully responsive WordPress website.',
        properties: [
          { name:'Project Type', value:'Website' },
          { name:'Skills', value:'HTML' },
          { name:'Skills', value:'CSS' },
          { name:'Skills', value:'Vanilla JS' },
          { name:'Skills', value:'jQuery' }, 
          { name:'Contribution', value:'Team' },
          { name:'Software / Libraries', value:'WordPress' }
        ]
      },{
        name:'XDR Products',
        featured: true,
        imageLocation:'projects/xdr_products/xdrproducts.jpg',
        class:'public',
        url:'projects/xdr_products',
        description:'XDR Products is an e-commerce website that sells tech products. Site was built on Wordpress.',
        properties: [
          { name:'Project Type', value:'Website' },
          { name:'Skills', value:'HTML' },
          { name:'Skills', value:'CSS' },
          { name:'Skills', value:'eCommerce' },
          { name:'Skills', value:'jQuery' }, 
          { name:'Contribution', value:'Individual' },
          { name:'Software / Libraries', value:'WordPress' }
        ]
      },{
        name:'Coastal Spray',
        featured: true,
        imageLocation:'projects/coastal_spray/coastal_spray.jpg',
        class:'public',
        url:'projects/coastal_spray',
        description:'Coastal Spray is a fully responsive website WordPress.',
        properties: [
          { name:'Project Type', value:'Website' },
          { name:'Skills', value:'HTML' },
          { name:'Skills', value:'CSS' },
          { name:'Skills', value:'Custom Forms' },
          { name:'Skills', value:'jQuery' }, 
          { name:'Contribution', value:'Team' },
          { name:'Software / Libraries', value:'WordPress' }
        ]
      },{
        name:'Double Barrel RSS',
        featured: false,
        imageLocation:'projects/double_barrel_rss/double_barrel_rss.jpg',
        class:'public',
        url:'projects/double_barrel_rss',
        description:'Double Barrel RSS is a fully responsive website WordPress.',
        properties: [
          { name:'Project Type', value:'Website' },
          { name:'Skills', value:'HTML' },
          { name:'Skills', value:'CSS' },
          { name:'Skills', value:'jQuery' }, 
          { name:'Contribution', value:'Team' },
          { name:'Software / Libraries', value:'WordPress' }
        ]
      }  
    ];

    service.getSampleData = function() {
      return products;
    };

    return service;
  });

})();