# UCUM printSymbol supplement - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UCUM printSymbol supplement**

## ValueSet: UCUM printSymbol supplement (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/ehealth-ucum-printsymbol-supplement | *Version*:11.0.3 |
| Active as of 2019-02-13 | *Computable Name*:UCUMPrintSymbolSupplement |

 
UCUM printSymbol supplement 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-ucum-printsymbol-supplement",
  "url" : "http://ehealth.sundhed.dk/vs/ehealth-ucum-printsymbol-supplement",
  "version" : "11.0.3",
  "name" : "UCUMPrintSymbolSupplement",
  "title" : "UCUM printSymbol supplement",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-02-13T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "UCUM printSymbol supplement",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/ehealth-ucum-printsymbol-supplement"
    }]
  }
}

```
