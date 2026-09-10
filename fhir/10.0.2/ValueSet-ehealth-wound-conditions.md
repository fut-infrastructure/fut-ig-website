# Wound Conditions - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Wound Conditions**

## ValueSet: Wound Conditions 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/wound-conditions | *Version*:10.0.2 |
| Active as of 2026-02-10 | *Computable Name*:WoundConditions |

 
Wound conditions. 

 **References** 

* Included into [Conditions](ValueSet-ehealth-conditions.md)

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
  "id" : "ehealth-wound-conditions",
  "url" : "http://ehealth.sundhed.dk/vs/wound-conditions",
  "version" : "10.0.2",
  "name" : "WoundConditions",
  "title" : "Wound Conditions",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-02-10T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Wound conditions.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "urn:oid:1.2.208.176.2.4",
      "concept" : [{
        "code" : "DI830B"
      },
      {
        "code" : "DI830A"
      },
      {
        "code" : "DI870"
      },
      {
        "code" : "DI832"
      },
      {
        "code" : "DI831"
      },
      {
        "code" : "DR699"
      },
      {
        "code" : "DL892A"
      },
      {
        "code" : "DL89"
      },
      {
        "code" : "DL892"
      },
      {
        "code" : "DL891"
      },
      {
        "code" : "DL891A"
      },
      {
        "code" : "DL890A"
      },
      {
        "code" : "DL890"
      },
      {
        "code" : "DL893A"
      },
      {
        "code" : "DL893"
      },
      {
        "code" : "DS819"
      },
      {
        "code" : "DS913A"
      },
      {
        "code" : "DS519"
      },
      {
        "code" : "DS913"
      },
      {
        "code" : "DT091"
      },
      {
        "code" : "DS898"
      },
      {
        "code" : "DS999"
      },
      {
        "code" : "DT14"
      },
      {
        "code" : "DZ933"
      },
      {
        "code" : "DC509"
      },
      {
        "code" : "BNPF2"
      },
      {
        "code" : "DT813C"
      },
      {
        "code" : "DT875"
      },
      {
        "code" : "DT814H"
      },
      {
        "code" : "DT814G"
      },
      {
        "code" : "DT814F"
      },
      {
        "code" : "DT813D"
      },
      {
        "code" : "DT876"
      },
      {
        "code" : "DL120"
      },
      {
        "code" : "DL889"
      },
      {
        "code" : "DL959"
      },
      {
        "code" : "DL958"
      },
      {
        "code" : "DL921"
      },
      {
        "code" : "DC437A"
      },
      {
        "code" : "ZM80703"
      },
      {
        "code" : "ZM80903"
      },
      {
        "code" : "DC449"
      },
      {
        "code" : "DE147"
      },
      {
        "code" : "DE105C"
      },
      {
        "code" : "DE145C"
      },
      {
        "code" : "DE105B"
      },
      {
        "code" : "DE145B"
      },
      {
        "code" : "DE104"
      },
      {
        "code" : "DE144"
      },
      {
        "code" : "DE115C"
      },
      {
        "code" : "DE115B"
      },
      {
        "code" : "DM142"
      },
      {
        "code" : "DE114"
      },
      {
        "code" : "DL979E"
      },
      {
        "code" : "DI702A"
      },
      {
        "code" : "DI702"
      },
      {
        "code" : "DL979B"
      },
      {
        "code" : "DL979A"
      },
      {
        "code" : "DL984"
      },
      {
        "code" : "DR609"
      },
      {
        "code" : "DL979"
      },
      {
        "code" : "DL059"
      },
      {
        "code" : "DI890"
      },
      {
        "code" : "DL849"
      },
      {
        "code" : "DA469"
      },
      {
        "code" : "DL309"
      },
      {
        "code" : "DL738A"
      },
      {
        "code" : "DA46"
      },
      {
        "code" : "DM146"
      },
      {
        "code" : "DL308H"
      },
      {
        "code" : "DL979C"
      },
      {
        "code" : "DL732"
      },
      {
        "code" : "DT959"
      },
      {
        "code" : "DL920B"
      },
      {
        "code" : "DL138"
      },
      {
        "code" : "DL600"
      },
      {
        "code" : "DL023"
      },
      {
        "code" : "DT140D"
      },
      {
        "code" : "DS718"
      },
      {
        "code" : "DZ945"
      },
      {
        "code" : "DC434"
      },
      {
        "code" : "DT691"
      },
      {
        "code" : "DS510"
      },
      {
        "code" : "DL570"
      },
      {
        "code" : "DT860A"
      },
      {
        "code" : "DL982"
      },
      {
        "code" : "DL022N"
      },
      {
        "code" : "DT111"
      },
      {
        "code" : "DS711"
      },
      {
        "code" : "DZ940"
      },
      {
        "code" : "DB028"
      },
      {
        "code" : "DQ828F"
      },
      {
        "code" : "DT669"
      },
      {
        "code" : "DS912"
      },
      {
        "code" : "DI708"
      },
      {
        "code" : "DS411"
      },
      {
        "code" : "DL40"
      },
      {
        "code" : "DS681D"
      },
      {
        "code" : "DM726"
      },
      {
        "code" : "DL050"
      },
      {
        "code" : "DT247B"
      },
      {
        "code" : "DS911"
      },
      {
        "code" : "DD863"
      },
      {
        "code" : "DS318A"
      },
      {
        "code" : "DT019"
      },
      {
        "code" : "DS611"
      },
      {
        "code" : "DZ489"
      },
      {
        "code" : "DL039"
      },
      {
        "code" : "DT232B"
      },
      {
        "code" : "DL951"
      },
      {
        "code" : "DS098"
      },
      {
        "code" : "DS610A"
      },
      {
        "code" : "DL030A"
      },
      {
        "code" : "DT200"
      },
      {
        "code" : "DS82"
      },
      {
        "code" : "DG629"
      },
      {
        "code" : "DS000"
      },
      {
        "code" : "DL281"
      },
      {
        "code" : "DL282"
      },
      {
        "code" : "DS917"
      },
      {
        "code" : "DS610"
      },
      {
        "code" : "DL609"
      },
      {
        "code" : "DL984B"
      },
      {
        "code" : "DL024"
      }]
    }]
  }
}

```
