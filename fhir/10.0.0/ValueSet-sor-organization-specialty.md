# SorOrganizationSpecialty - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SorOrganizationSpecialty**

## ValueSet: SorOrganizationSpecialty (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/sor-organization-specialty | *Version*:10.0.0 |
| Active as of 2019-05-27 | *Computable Name*:SorOrganizationSpecialty |

 
Value set used for indicating the specialty for organizations from Sor 

 **References** 

* Included into [OrganizationSpecialty](ValueSet-ehealth-organization-specialty.md)
* Included into [PracticeSettingCodes](ValueSet-ehealth-practice-setting-codes.md)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "sor-organization-specialty",
  "url" : "http://ehealth.sundhed.dk/vs/sor-organization-specialty",
  "version" : "10.0.0",
  "name" : "SorOrganizationSpecialty",
  "title" : "SorOrganizationSpecialty",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-05-27T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Value set used for indicating the specialty for organizations from Sor",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/sor-organization-specialty"
    },
    {
      "system" : "http://snomed.info/sct/554471000005108/version/20150731",
      "concept" : [{
        "code" : "394812008"
      },
      {
        "code" : "551411000005104"
      },
      {
        "code" : "554011000005107"
      }]
    },
    {
      "system" : "http://snomed.info/sct",
      "concept" : [{
        "code" : "658171000005102"
      },
      {
        "code" : "658161000005107"
      },
      {
        "code" : "658151000005105"
      },
      {
        "code" : "658191000005101"
      },
      {
        "code" : "658201000005103"
      },
      {
        "code" : "658141000005108"
      },
      {
        "code" : "658181000005104"
      },
      {
        "code" : "2903041000005106"
      },
      {
        "code" : "394537008"
      },
      {
        "code" : "394577000"
      },
      {
        "code" : "394579002"
      },
      {
        "code" : "394580004"
      },
      {
        "code" : "394581000"
      },
      {
        "code" : "394582007"
      },
      {
        "code" : "394583002"
      },
      {
        "code" : "394584008"
      },
      {
        "code" : "394585009"
      },
      {
        "code" : "394587001"
      },
      {
        "code" : "394588006"
      },
      {
        "code" : "394589003"
      },
      {
        "code" : "394591006"
      },
      {
        "code" : "394592004"
      },
      {
        "code" : "394594003"
      },
      {
        "code" : "394596001"
      },
      {
        "code" : "394600006"
      },
      {
        "code" : "394601005"
      },
      {
        "code" : "394603008"
      },
      {
        "code" : "394604002"
      },
      {
        "code" : "394605001"
      },
      {
        "code" : "394608004"
      },
      {
        "code" : "394609007"
      },
      {
        "code" : "394610002"
      },
      {
        "code" : "394611003"
      },
      {
        "code" : "394612005"
      },
      {
        "code" : "394801008"
      },
      {
        "code" : "394803006"
      },
      {
        "code" : "394805004"
      },
      {
        "code" : "394807007"
      },
      {
        "code" : "394809005"
      },
      {
        "code" : "394810000"
      },
      {
        "code" : "394811001"
      },
      {
        "code" : "394821009"
      },
      {
        "code" : "394914008"
      },
      {
        "code" : "394915009"
      },
      {
        "code" : "408443003"
      },
      {
        "code" : "408448007"
      },
      {
        "code" : "408454008"
      },
      {
        "code" : "408463005"
      },
      {
        "code" : "408472002"
      },
      {
        "code" : "418112009"
      },
      {
        "code" : "419192003"
      },
      {
        "code" : "421661004"
      },
      {
        "code" : "773568002"
      }]
    }]
  }
}

```
