# eHealth Usage Context Type - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHealth Usage Context Type**

## ValueSet: eHealth Usage Context Type (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/ehealth-usage-context-type | *Version*:6.0.0 |
| Active as of 2020-11-20 | *Computable Name*:eHealthUsageContextType |

 
The following table supersedes the expansion table below for the following codes: 

| | | | |
| :--- | :--- | :--- | :--- |
| focus | http://terminology.hl7.org/CodeSystem/usage-context-type | Clinical Focus | The clinical concept(s) addressed by the artifact/element. For example, disease, diagnostic test interpretation, medication ordering as in http://ehealth.sundhed.dk/vs/conditions |
| program | http://terminology.hl7.org/CodeSystem/usage-context-type | Program | A program/project of work for which this artifact/element is applicable. http://ehealth.sundhed.dk/vs/ehealth-program |
| activity | http://ehealth.sundhed.dk/cs/ehealth-usage-context-type | Activity Type | The type of activity in which it is relevant to use a module/element having this use context (see http://hl7.org/fhir/metadatatypes.html#UsageContext). For this context type, the value should be a code taken from the http://ehealth.sundhed.dk/vs/activitydefinition-code value set. |
| supports | http://ehealth.sundhed.dk/cs/ehealth-usage-context-type | Supports | The type of activity supported by a module/element having this use context (see http://hl7.org/fhir/metadatatypes.html#UsageContext). For this context type, the value should be a code taken from the http://ehealth.sundhed.dk/vs/activitydefinition-code value set. |
| range | http://ehealth.sundhed.dk/cs/ehealth-usage-context-type | Range | The type of reference range with which it is relevant to use a module/element having this use context (see http://hl7.org/fhir/metadatatypes.html#UsageContext). For this context type, the value should be a code taken from the http://ehealth.sundhed.dk/vs/reference-range-type value set. |
| questionnaire-related | http://ehealth.sundhed.dk/cs/ehealth-usage-context-type | Questionnaire Related | The type of questionnaire element with which it is relevant to use a coded values/id registries having this use context (see http://hl7.org/fhir/metadatatypes.html#UsageContext). For this context type, the value should be a code taken from the http://ehealth.sundhed.dk/vs/questionnaire-elements value set. |

 

 **References** 

* [ehealth-library](StructureDefinition-ehealth-library.md)

### Logical Definition (CLD)

This value set includes codes based on the following rules:

* Include all codes defined in [`http://terminology.hl7.org/CodeSystem/usage-context-type`](http://terminology.hl7.org/6.5.0/CodeSystem-usage-context-type.html)version 📦2.0.1
* Include all codes defined in [`http://ehealth.sundhed.dk/cs/ehealth-usage-context-type`](CodeSystem-ehealth-usage-context-type.md)version 📦6.0.0

 

### Expansion

This value set contains 15 concepts

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
  "id" : "ehealth-usage-context-type",
  "url" : "http://ehealth.sundhed.dk/vs/ehealth-usage-context-type",
  "version" : "6.0.0",
  "name" : "eHealthUsageContextType",
  "title" : "eHealth Usage Context Type",
  "status" : "active",
  "experimental" : true,
  "date" : "2020-11-20T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [
    {
      "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://ehealth.sundhed.dk"
        }
      ]
    }
  ],
  "description" : "The following table supersedes the expansion table below for the following codes:\n\n| Code                | System                                                                                     | Display           | Definition                                                                                                                                                                                   |\n|---------------------|--------------------------------------------------------------------------------------------|-------------------|----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|\n| focus               | http://terminology.hl7.org/CodeSystem/usage-context-type                                    | Clinical Focus    | The clinical concept(s) addressed by the artifact/element. For example, disease, diagnostic test interpretation, medication ordering as in http://ehealth.sundhed.dk/vs/conditions                                                |\n| program             | http://terminology.hl7.org/CodeSystem/usage-context-type                                    | Program           | A program/project of work for which this artifact/element is applicable. http://ehealth.sundhed.dk/vs/ehealth-program                                                                                                         |\n| activity            | http://ehealth.sundhed.dk/cs/ehealth-usage-context-type                                    | Activity Type     | The type of activity in which it is relevant to use a module/element having this use context (see http://hl7.org/fhir/metadatatypes.html#UsageContext). For this context type, the value should be a code taken from the http://ehealth.sundhed.dk/vs/activitydefinition-code value set. |\n| supports            | http://ehealth.sundhed.dk/cs/ehealth-usage-context-type                                    | Supports          | The type of activity supported by a module/element having this use context (see http://hl7.org/fhir/metadatatypes.html#UsageContext). For this context type, the value should be a code taken from the http://ehealth.sundhed.dk/vs/activitydefinition-code value set. |\n| range               | http://ehealth.sundhed.dk/cs/ehealth-usage-context-type                                    | Range             | The type of reference range with which it is relevant to use a module/element having this use context (see http://hl7.org/fhir/metadatatypes.html#UsageContext). For this context type, the value should be a code taken from the http://ehealth.sundhed.dk/vs/reference-range-type value set. |\n| questionnaire-related | http://ehealth.sundhed.dk/cs/ehealth-usage-context-type                                    | Questionnaire Related | The type of questionnaire element with which it is relevant to use a coded values/id registries having this use context (see http://hl7.org/fhir/metadatatypes.html#UsageContext). For this context type, the value should be a code taken from the http://ehealth.sundhed.dk/vs/questionnaire-elements value set. |\n",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "DK",
          "display" : "Denmark"
        }
      ]
    }
  ],
  "compose" : {
    "include" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/usage-context-type"
      },
      {
        "system" : "http://ehealth.sundhed.dk/cs/ehealth-usage-context-type"
      }
    ]
  }
}

```
