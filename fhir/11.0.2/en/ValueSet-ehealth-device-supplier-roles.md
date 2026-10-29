# Device Supplier Roles - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Device Supplier Roles**

## ValueSet: Device Supplier Roles (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/device-supplier-roles | *Version*:11.0.2 |
| Active as of 2019-02-08 | *Computable Name*:DeviceSupplierRoles |

 
Device Supplier Roles value set. 

 **References** 

* [Suppliers](StructureDefinition-ehealth-device-suppliers.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-device-supplier-roles",
  "url" : "http://ehealth.sundhed.dk/vs/device-supplier-roles",
  "version" : "11.0.2",
  "name" : "DeviceSupplierRoles",
  "title" : "Device Supplier Roles",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-02-08T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Device Supplier Roles value set.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/device-supplier-roles"
    }]
  }
}

```
