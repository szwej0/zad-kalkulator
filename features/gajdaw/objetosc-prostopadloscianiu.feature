Feature: Obliczenia

  Scenario: Objętość prostopadłościanu
    Given I am on homepage
    When I follow "Objętość prostopadłościanu by gajdaw"
    And I fill in "A" with "2"
    And I fill in "B" with "3"
    And I fill in "C" with "4"
    And I press "Oblicz"
    Then I should see "Objętość prostopadłościanu wynosi: 24"
