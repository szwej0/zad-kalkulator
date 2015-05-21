Feature: Zamiana małych liter na duże

  Scenario: Zamiana małych liter na duże
    Given I am on homepage
    When I follow "Małe na duże by bartuuus"
    And I fill in "Podaj napis" with "uniwersyTET LUBElski"
    And I press "Przetwórz"
    Then I should see "Napis po zamianie: UNIWERSYTET LUBELSKI"