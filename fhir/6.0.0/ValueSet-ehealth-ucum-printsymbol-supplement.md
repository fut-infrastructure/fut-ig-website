# UCUM printSymbol supplement - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UCUM printSymbol supplement**

## ValueSet: UCUM printSymbol supplement (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/ehealth-ucum-printsymbol-supplement | *Version*:6.0.0 |
| Active as of 2019-02-13 | *Computable Name*:UCUMPrintSymbolSupplement |

 
UCUM printSymbol supplement 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

* Include all codes defined in [`http://ehealth.sundhed.dk/cs/ehealth-ucum-printsymbol-supplement`](CodeSystem-ehealth-ucum-printsymbol-supplement.md)version 📦6.0.0

 

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
  "id" : "ehealth-ucum-printsymbol-supplement",
  "url" : "http://ehealth.sundhed.dk/vs/ehealth-ucum-printsymbol-supplement",
  "version" : "6.0.0",
  "name" : "UCUMPrintSymbolSupplement",
  "title" : "UCUM printSymbol supplement",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-02-13T00:00:00+00:00",
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
  "description" : "UCUM printSymbol supplement",
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
        "system" : "http://ehealth.sundhed.dk/cs/ehealth-ucum-printsymbol-supplement"
      }
    ]
  }
}

```
